@extends('layouts.template')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@section('content')

    @if(Session::get('success'))
            <div class="alert alert-success"> {{ Session::get('success') }} </div>
    @endif
    @if(Session::get('delete'))
        <div class="alert alert-warning"> {{ Session::get('delete') }} </div>
    @endif  
    <h4 display-10 style="margin-left: 240px; color: darkblue; font-weight: bold;">Data Staff Tata Usaha</h4>
    <p style="margin-left: 240px; width: 70%; font-size: 12px; color: darkblue; font-weight: bold;">Home / Data Staff Tata Usaha / Tambah Data Staff Tata Usaha</p>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-4" style="float: top; margin-left: 240px;">Tambah</a>
    <div class="pb-3">
      <form class="d-flex" action="{{url('users')}}" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan nama" aria-label="Search" style="margin-left: 1000px;">
          <button class="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
      </form>
    </div>
    <table class="table table table table-hover" style="width: 70%; margin-left: 240px;">
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
            @php $no = 1; @endphp
            @foreach ($users as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['role'] }}</td>
                <td class="d-flex justify-content-center">
                <a href="{{ route('users.edit', $item['id'])}}" class="btn btn-primary me-3">Edit</a>

                    <button type="button" class="btn btn-danger delete-button" data-toggle="modal"data-target="#deleteModal" data-id="{{ $item['id'] }}">Hapus</button>
                </td>  
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="deleteModal" tabindex="-1" rol="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Yakin ingin menghapus akun ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function () {
            $(".delete-button").click(function () {
                var id = $(this).data('id');
                $("#deleteForm").attr('action', '{{ route("users.destroy", "") }}/' + id);
            });
        });
    </script>
    <div class="d-flex justify-content-start" style="margin-left: 240px;">
    {{-- jika data lebih dari 0 --}}
    @if($users->count())
        <button type="button" class="btn btn-" onclick="window.location='{{ $users->previousPageUrl() }}'">Previous</button>
        <button type="button" class="btn btn-" onclick="window.location='{{ $users->nextPageUrl() }}'">Next</button>
    @endif
</div>

@endsection