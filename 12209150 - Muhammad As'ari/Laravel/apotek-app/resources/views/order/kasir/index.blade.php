@extends('layouts.template')

@section('content')
<div class="container mt-3"></div>
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian baru</a>
</div>

<form method="GET" action="{{ route('kasir.order.index') }}">
    <div class="input-group mb-3">
        <input type="date" class="form-control" name="date">
        <button type="submit" class="btn btn-primary">Filter</button>
        <a href="{{ route('kasir.order.index') }}" class="btn btn-secondary">Clear Filter</a>
    </div>
</form>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Pembeli</th>
            <th>Obat</th>
            <th>Total Bayar</th>
            <th>Kasir</th>
            <th>Tanggal Beli</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($orders as $item)
        <tr>
            <td class="text-center">{{ $no++}}</td>
            <td>{{ $item['nama_customer']}}</td>
            <td>
                @foreach ($item['medicines'] as $medicine)
                <ol>
                    <li>
                        {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'],0,',','.') }} ) : Rp. {{ number_format($medicine['sub_price'],0,',','.') }} <small>qty {{ $medicine['qty'] }}</small>
                    </li>
                </ol>
                @endforeach
            </td>
            <td>Rp. {{ number_format($item['total_price'], 0, ',', '.') }}</td>
            <td>{{ $item['user']['name'] }}</td>
            <td>{{ date('d F Y', strtotime($item['created_at'])) }}</td>
            <td>
                <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-secondary">Download Setruk</a>
            </td>
            <td>
                <form action="{{ route('kasir.order.delete', $item['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus order ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </div>
</table>

<div class="d-flex justify-content-end">
    @if ($orders->count())
    {{ $orders->links()}}
    @endif
</div>
</div>
@endsection