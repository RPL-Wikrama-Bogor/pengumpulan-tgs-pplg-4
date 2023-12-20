@extends('layouts.template')

@section('content')

@if(Session::get('success'))
    <div class="alert alert-success"> {{ Session::get('success') }} </div>
@endif
@if(Session::get('deleted'))
    <div class="alert alert-warning"> {{ Session::get('deleted') }} </div>
@endif
<h1 class="h3 mb-5 text-gray-800 mt-5">Data Guru</h1>
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
        @php $no = ($Users->currentPage() - 1) * $Users->perPage() + 1; @endphp
        @foreach ($Users as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['role'] }}</td>
            <td class="d-flex justify-content-center">
                <a href="{{ route('user.guru.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>

                <!-- Modal trigger button -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete{{ $item['id'] }}">
                    Hapus
                </button>

                <!-- Modal -->
                <div class="modal fade" id="confirmDelete{{ $item['id'] }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $item['id'] }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteLabel{{ $item['id'] }}">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Anda yakin ingin melanjutkan menghapus data ini?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('userDelete', $item['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Ya</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    @if ($Users->count())
        {{ $Users->links() }}
    @endif
</div>
@endsection
