@extends('layouts.template')
@section('content')
<form action="{{ route('userg.updateg', $userg['id']) }}" method="POST" class="card p-5">
    @csrf
    @method('PATCH')

    @if ($errors->any())
    <ul class="alert alert-danger p-3">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Kode Surat :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $userg['kode+surat'] }}">
        </div>
    </div>

    
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Klasifikasi :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="klasifikasi_surat" name="klasifikasi_surat" value="{{ $userg['klasifikasi_surat'] }}">
        </div>
    </div>

    <!-- <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Tipe Pengguna :</label>
            <div class="col-sm-10">
                <select class="form-select" id="role" name="role">
                    <option value="staff" {{ $users['role'] == 'staff' ? 'selected' : '' }}>staff</option>
                    <option value="guru"  {{ $users['role'] == 'guru' ? 'selected' : '' }}>guru</option>
                    <option selected disabled hidden>Pilih</option>
                </select>
            </div>
        </div> -->

    <!--<div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Ubah Pasword:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" value="{{ $users['password'] }}">
        </div>
    </div>-->

    <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
</form>
@endsection