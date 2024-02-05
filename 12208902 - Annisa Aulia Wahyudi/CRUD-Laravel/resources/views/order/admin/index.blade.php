@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="my-5 d-flex justify-content-between align-items-center">
            <div>
                <form action="{{ route('order.search') }}" method="GET" class="form-inline">
                    <div class="form-group mb-2">
                        <input type="date" name="search_date" class="form-control">
                    </div>  
                    <button type="submit" class="btn btn-info mb-2 mx-2">Cari Data</button>
                    <a href="{{ route('order.data') }}" class="btn btn-secondary mb-2 mx-2">clear</a> 
                </form>
            </div>
        <div>
            <a href="{{ route('order.export-excel') }}" class="btn btn-primary order-1">Export Data (Excel)</a>
        </div>
    </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>kasir</th>
                    <th>Tanggal Beli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        {{-- menampilkan angka urutan berdasarkan page pagination (digunakan ketika mengambil data dengan paginate/simplepaginate)  --}}
                        <td>{{ ($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1}}</td>
                        <td>{{ $order->name_customer }}</td>
                        <td>    
                            {{-- nested loop : didalam looping ada looping --}}
                            {{-- karna colum medicines tipe datanya berbentuk arrat=y json, maka untuk mengaksesnya perlu di looping jg --}}
                            <ol>
                            @foreach ($order['medicines'] as $medicine)
                                <li>
                                    {{-- mengakses key array assoc dari tiap item array value colum medicine --}}
                                    {{-- 1. nama obat (Rp. 3000) : Rp. 15000 qty 5 --}}
                                    {{ $medicine['name_medicine'] }} 
                                    ( Rp. {{ number_format($medicine['price'],0,',','.') }} ) : 
                                    Rp {{ number_format($medicine['sub_price'],0,',','.') }} <small>qty {{$medicine['qty'] }}</small>
                                </li>
                            @endforeach
                            </ol>
                           
                        </td>
                        <td>{{ $order['user']['name'] }}</td>
                        {{-- carbon : package bawaan laravel untuk mengatur hal2 yng berkaitan dengan tipe data date/datetime --}}
                        @php
                            // setting lokal time sebagai wilayah indonesia
                            setlocale(LC_ALL, 'IND');
                        @endphp
                        <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
                        <td><a href="{{ route('order.download', $order['id']) }}" class="btn btn-secondary">Unduh (.pdf)</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{-- jika data ada atau > 0 --}}
            @if ($orders->count())
                {{-- munculkan tampilan pagination --}}
                {{ $orders->links() }}
            @endif
        </div>
@endsection