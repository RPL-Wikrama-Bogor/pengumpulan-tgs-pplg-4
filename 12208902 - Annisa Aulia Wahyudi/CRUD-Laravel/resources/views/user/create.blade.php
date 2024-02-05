@extends('layouts.template')

@section('content')
    <form action="{{ route('user.store') }}" method="POST" class="card p-5">
        @csrf

        @if(Session::get('success'))
	        <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if ($errors->any())
	    <ul class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>       
        @endif

        <div class="mb-3 row">
            <label for="name" calss="col-sm-2 col-form-label">Nama :</label>
            <div calss="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">  
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" calss="col-sm-2 col-form-label">Email:</label>
            <div calss="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">  
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" calss="col-sm-2 col-form-label">Tipe Pengguna:</label>
            <div calss="col-sm-10">
                <select class="form-select" name="role" id="role">
                    <option selected disabled hidden>Pilih </option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="cashier" {{ old('role') == 'cashier' ? 'selected' : '' }}>Cashier</option>
                </select>  
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
@endsection