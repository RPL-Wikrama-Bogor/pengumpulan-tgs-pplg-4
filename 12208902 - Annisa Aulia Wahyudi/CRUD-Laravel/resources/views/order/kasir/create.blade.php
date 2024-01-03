@extends('layouts.template')

@section('content')
    <form action="{{route('kasir.order.store')}}" method="POST" class="card p-4 mt-5">
        @csrf
        {{-- validasi error message--}}
        @if ($errors->any())

            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
        @endif
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{ Session::get('failed') }}</div>
        @endif
        <p>penganggung jawab : <b>{{ Auth::user()->name }}</b> </p>
        <div class="mb-3 row">
            <label for="name_customer" class="col-sm-2 col-form-label ">nama pembeli</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name_customer" name="name_customer" value="{{ old('name') }}">
                @error('name_customer')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="medicines" class="col-sm-2 col-form-label ">Obat</label>
            <div class="col-sm-10">
                {{--name dibuat array karena nantinya data obat (medicines) akan berbentuk array/data bisa lebih dari satu --}}
                <select name="medicines[]" id="medicines" class="form-select">
                    <option selected hidden disabled>Pesanan 1</option>
                    @foreach ($medicines as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
                    
                {{-- div pembungkus untuk tambah select yang akan muncul--}}
                <div id="wrap-medicines"></div>
                <br>
                <p style="cursor: pointer"class="text-primary"  id="add-select">+ tambah obat</p>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-lg btn-primary">Konfirmasi Pembelian</button>
    </form>
@endsection

@push('script')
<script>
    //nentuin persnaan yang ke berapa
      let no = 2;
    // ketika tag dengan id add-select di click jalankan func berikut

    $("#add-select").on("click", function() {
        //html yang akan ditambahkan ketika di klik
        //${no} memanggil variable no
        let el = `<br><select name="medicines[]" class="form-control">
            <option disabled hidden selected> pesanan ${no}</option>
            @foreach ($medicines as $item)
                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>`;
        //dengan jquery pada el dengan id wrap-medicines, ditambah html baru dari variable el dan disimpan di sebelum penutu tag wrap-medicine nya
            //.html() = mengubah , .append() = menambahh
        $("#wrap-medicines").append(el);

        no++;
    });
    
    </script>
@endpush