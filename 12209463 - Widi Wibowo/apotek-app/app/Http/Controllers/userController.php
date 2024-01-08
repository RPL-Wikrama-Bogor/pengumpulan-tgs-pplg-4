<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('User.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'required',
        'role' => 'required',
    ]);

    $password = substr($request->email, 0, 3) . substr($request->name, 0, 3);

    user::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($password),
        'role' => $request->role,
    ]);

    return redirect()->back()->with('success', 'Berhasil menambahkan Akun!');
    }

    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = user::find($id);
        return view('user.edit', compact('users'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'role' => 'required|',
        ]);
    
        user::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);
    
        return redirect()->route('user.home')->with('success', 'Berhasil mengubah data!');
    }
    
    public function destroy($id)
    {
        user::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }

    public function loginAuth(Request $request)
    {
    $request->validate([
        'email'    => 'required|email:dns',
        'password' => 'required',
    ]);

    $user = $request->only(['email', 'password']);
    if (Auth::attempt($user)) {
        return redirect()->route('home.page');
    } else {
        return redirect()->back()->with('failed', 'Proses login gagal, silahkan coba kembali dengan data yang benar!');
    }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('logout')->with('logout', 'Anda telah logout!');
    }
}


