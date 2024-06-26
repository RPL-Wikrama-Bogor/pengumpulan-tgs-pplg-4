<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;
use App\Exports\OrdersExport;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Order::with('user');
    
        // Check if a date filter is applied
        if ($request->has('date')) {
            $selectedDate = date('Y-m-d', strtotime($request->input('date')));
            $query->whereDate('created_at', $selectedDate);
        }
    
        // Check if the "Clear Filter" button is clicked
        if ($request->has('clear')) {
            return redirect()->route('kasir.order.index');
        }
    
        $orders = $query->simplePaginate(10);
    
        return view('order.kasir.index', compact('orders'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicines = Medicine::all();
        return view("order.kasir.create", compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required',
            'medicines' => 'required',
        ]);

        $arrayDistinct = array_count_values($request->medicines);
        $arrayAssocMedicines = [];

        foreach ($arrayDistinct as $id => $count) {
            $medicine = Medicine::where('id', $id)->first();
            $subPrice = $medicine['price']* $count;
            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicine['name'],
                "qty" => $count,
                "price" => $medicine['price'],
                "sub_price" => $subPrice,
            ];

            array_push($arrayAssocMedicines, $arrayItem);
        }

        $totalPrice = 0;
        foreach ($arrayAssocMedicines as $item) {
            $totalPrice += (int)$item['sub_price'];
        }

        $priceWithPPN = $totalPrice + ($totalPrice * 0.01);

        $proses = Order::create([
            'user_id' => Auth::user()->id,
            'medicines' => $arrayAssocMedicines,
            'nama_customer' => $request->name_customer,
            'total_price' => $priceWithPPN,
        ]);

        if ($proses) {
            // $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            return redirect()->route('kasir.order.print', $proses->id);
        } else {
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian. Silahkan coba kembali dengan data yang sesuai!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.kasir.print', compact('order'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $order = Order::find($id);

    if (!$order) {
        return redirect()->back()->with('failed', 'Order tidak ditemukan.');
    }

    $order->delete();

    return redirect()->route('kasir.order.index')->with('success', 'Order berhasil dihapus.');
}

    public function downloadPDF($id)
    {
        $order = Order::find($id)->toArray();
        view()->share('order', $order);
        $pdf = PDF::loadView('order.kasir.download-pdf', $order);
        return $pdf->download('receipt.pdf');
    }

    public function data()
    {
        $orders = Order::with('user')->simplePaginate(5);
        return view('order.admin.index', compact('orders'));
    }

    public function exportExcel()
    {
        $file_name = 'data_pembelian2.xlsx';
        $response = Excel::download(new OrdersExport, $file_name);
        ob_end_clean();

        return $response;
    }
}
?>
