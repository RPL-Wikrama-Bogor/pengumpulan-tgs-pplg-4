<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->simplePaginate(3);
        return view('users.index', compact('users'));
        //
    }
    

    // public function indexg()
    // {
    //     $userg = user::all();
    //     return view('userg.indexg', compact('userg'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
        //
    }
    // public function createg()
    // {
    //     return view('userg.createg');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]); 
        return redirect()->back()->with('success', 'Berhasil menambahkan data!');
    }

    //public function storeg(Requestg $requestg)
    //{
        //$requestg->validateg([
            //'kode_surat' => 'required|min:3',
            //'klasifikasi_surat' => 'required',
        //]);
    //     userg::createg([
    //         'kode_surat' => $requestg->kode_surat,
    //         'klasifikasi_surat' => $requestg->klasifikasi_surat,
    //     ]);
    //     return redirect()->back()->with('success', 'Berhasil menambahkan data!!');
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        
        //if (!$users) {
            //return redirect()->route('users.home')->with('error', 'Data pengguna tidak ditemukan');
        //}
    
        return view('users.edit', compact('users'));
    }
    // public function editg($id)
    // {
    //     $userg = User::find($id);

    //     return view('userg.editg', compact('userg'));
    // }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns',
            // 'role' => 'required',
        ]);
        $password = substr($request->email, 0, 3) . substr($request->name, 0, 3);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($password),
        ]);

        return redirect()->route('users.home')->with('success', 'Berhasil mengubah data Pengguna!');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\letter_type  $letter_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete($id);

        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }
}