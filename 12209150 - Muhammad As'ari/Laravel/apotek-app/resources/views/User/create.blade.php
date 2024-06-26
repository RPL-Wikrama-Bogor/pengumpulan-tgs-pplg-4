@extends('layouts.template')

@section('content')
<form action="{{ route('user.store') }}" method="POST" class="card p-5">
        @csrf

        @if(Session::get('success'))
            <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }} ">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }} ">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Password : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="password" name="password">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Role : </label>
        <div class="col-sm-10">
            <select class="form-select" id="role" name="role">
                <option selected disabled hidden>Pilih</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>admin</option>
                <option value="cashier" {{ old('role') == 'cashier' ? 'selected' : '' }}>cashier</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
@endsection