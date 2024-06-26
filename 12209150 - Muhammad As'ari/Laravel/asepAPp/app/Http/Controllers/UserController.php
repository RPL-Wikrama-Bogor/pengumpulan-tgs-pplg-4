<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Index()
    {
        return view('user.dashboard');
    }
    public function tataUsahaIndex()
    {
        $Users = User::orderBy('name', 'ASC')->simplePaginate(5);
        return view('user.tataUsaha.index', compact('Users'));
    }

    public function tataUsahaEdit($id)
    {
        $User = User::find($id);
        // atau $User = User::where('id', $id)->first();

        return view('User.tataUsaha.edit', compact('User'));
    }
    public function tataUsahaUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'role' => 'required',
        ], [
            'name.required' => 'Nama obat harus diisi.',
            'email.required' => 'Email wajib diisi.',
            'role.required' => 'Jenis role harus dipilih'
        ]);

        $user = User::find($id);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();

        return redirect()->route('user.tataUsaha.index')->with('success', 'Data berhasil diubah');
    }

    public function guruIndex()
    {
        $Users = User::orderBy('name', 'ASC')->simplePaginate(5);
        return view('user.guru.index', compact('Users'));
    }

    public function tataUsahaCreate()
    {
        return view('User.tataUsaha.create');
    }
    public function guruCreate()
    {
        return view('User.guru.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required',
            'role' => 'required',
        ], [
            'email.unique' => 'Email sudah digunakan',
        ]);

        $query = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        if ($query) {
            return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->back()->with('failed', 'Data gagal ditambahkan');
        }
    }
    public function show(Request $request)
    {
        //
    }
    public function edit(Request $request)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Data berhasil dihapus');
    }
}
