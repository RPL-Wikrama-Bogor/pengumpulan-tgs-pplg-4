@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="my-5 d-flex justify-content-between align-items-center">
            <div>
                <form action="{{ route('kasir.order.search') }}" method="GET" class="form-inline">
                    <div class="form-group mb-2">
                        <input type="date" name="search_date" class="form-control">
                    </div>  
                    <button type="submit" class="btn btn-info mb-2 mx-2">Cari Data</button>
                    <a href="{{ route('kasir.order.index') }}" class="btn btn-secondary mb-2 mx-2">Clear</a> 
                </form>
            </div>
        <div>
            <a href="{{ route('kasir.order.create') }}" class="btn btn-primary m-2">Pembelian Baru</a>
        </div>
        </div>


        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>Total</th>
                    <th>kasir</th>
                    <th>Tanggal Beli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($orders as $item)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $item['name_customer'] }}</td>
                        <td>
                            {{-- karna colum medicines pada tabel orders bertipe json yang diubah formatnya menjadi array, maka dari itu untuk mengakses/ menampilkan item nya perlu menggunakan looping--}}
                            @foreach ($item['medicines'] as $medicine)
                                <ol>
                                    <li>
                                        {{-- mengakses key array assoc dari tiap item array value colum medicine --}}
                                        {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'],0,',','.') }} ) : Rp {{ number_format($medicine['sub_price'],0,',','.') }} <small>qty {{$medicine['qty'] }}</small>
                                    </li>
                                </ol>
                            @endforeach
                        </td>
                        <td>Rp. {{ number_format($item['total_price'],0,',','.') }}</td>
                        {{-- karna nama kasir terdapat pada tabel user,dan relasi antara order dan user telah didefinisikan pada function relasi bernama user, maka, untuk mengakses colum pada table user melalui relasi antara keduanya dapat dilakukan dengan $var['namaFunRelasi']['columDariTablelainnya'] --}}
                        <td>{{ $item['user']['name'] }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y') }}</td>

                        <td>
                            <a href="{{ route('kasir.order.download', $item['id']) }}"class="btn btn-secondary">Download Struk</a>
                        </td>
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
    </div>
@endsection 