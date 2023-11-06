@extends('layouts.template')

@section('content')

@if(Session::get('success'))
    <div class="alert alert-success"> {{ Session::get('success') }} </div>
@endif
@if(Session::get('deleted'))
    <div class="alert alert-warning"> {{ Session::get('deleted') }} </div>
@endif

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('user.create') }}" class="btn btn-secondary">Tambah pengguna</a>
</div>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $no = ($user->currentPage() - 1) * $user->perPage() + 1; @endphp
        @foreach ($user as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['role'] }}</td>
            <td class="d-flex justify-content-center">
                <a href="{{ route('user.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$item['id']}}">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    @if ($user->count())
        {{ $user->links() }}
    @endif
</div>

<!-- Modal -->
@foreach ($user as $item)
<div class="modal" id="deleteModal{{$item['id']}}">
    <div class="modal-content">
        <span class="close" data-dismiss="modal">&times;</span>
        <h3 class="modal-title">Konfirmasi Penghapusan</h3>
        <p>Anda yakin ingin menghapus pengguna ini?</p>
        <form action="{{ route('user.delete', $item['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </form>
    </div>
</div>
@endforeach

@endsection
