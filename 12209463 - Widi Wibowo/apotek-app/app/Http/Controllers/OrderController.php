<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("order.kasir.index");
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
        // mencari jumlah item yang sama pada array, strukturnya :
        // ["item" => "jumlah"]
        $arrayDistinct = array_count_values($request->medicines);
        // menyiapkan array kosong untuk menampung format array baru
        $arrayAssocMedicines = [];
        // looping hasil penghitungan item district (duplikat)
        // key akan berupa value dr input medicines (id), item array berupa jumlah penghitungan item duplikat 
        foreach ($arrayDistinct as $id => $count) {
            // mencari data obat berdasarkan id (obat yang dipilih)
            $medicines = Medicine::where('id', $id)->first();
            // ambil bagian column price dr hasil pencarian lalu kalian dengan jumlah item duplikat sehingga akan menghasilkan total harga dr pembelian obat tersebut
            $subPrice = $medicines['price'] * $count;
            // struktur value column medicines menjadi multidimesi dengan dimsensi kedua berbentuk array assoc dengan key "id", "name_medicine", "qty", "price" 
            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicines['name'],
                "qty" => $count,
                "price" => $medicines['price'],
                "sub_price" => $subPrice,
            ];
            // masukan struktur array tersebut ke array kosong yang disediakan sebelumnya
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
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            return redirect()->route('kasir.order.print',$order['id']);
        }
    }   


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.kasir.print', compact('order'));
    }

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
    public function destroy(Order $order)
    {
        //
    }
}
