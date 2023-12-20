@extends('layouts.template')

@section('content')

@if (Session::get('warning'))
    <div class="alert alert-warning">{{ Session::get('warning') }}</div>
@endif
<div class="jumbotron py-4 px-5">
    <h1 class="display-4">
        Selamat Datang {{ Auth::user()->name}}!
    </h1>
    <hr class="my-4">
    <p>Aplikasi ini digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data obat, penyetokan, juga (kasir).</p>
</div>
@endsection