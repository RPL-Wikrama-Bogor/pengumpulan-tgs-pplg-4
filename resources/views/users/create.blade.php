@extends('layouts.template')
@section('content')
<h4 display-10 style="margin-left:240px; color: darkblue; width: 70%;">Tambah Data Staff Tata Usaha</h4>
<p style="margin-left: 240px; width: 70%; font-size: 12px; color: darkblue; font-weight: bold;">Home / Data Staff Tata Usaha / Tambah Data Staff Tata Usaha</p>
<form action="{{ route('users.store') }}" method="POST" class="card p-5" style="margin-left:240px; width: 70%;">
@csrf

@if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label" >Nama :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email :</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
        </div>

    <div class="mb-3 row" style="margin-top: 10px;">
        <label for="email" class="col-sm-2 col-form-label">Password :</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password">
        </div>
        

        <div class="mb-3 row" style="margin-top:20px;">
        <label for="role" class="col-sm-2 col-form-label"> ROLE :</label>
        <div class="col-sm-10">
            <select name="role" id="role" class="form-select">
                <option selected disabled hidden>Pilih</option>
                <option value="admin">Staff</option>
                <option value="cashier">Guru</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
</form>
@endsection

<!-- href="{{ route('users.create') }}" -->
