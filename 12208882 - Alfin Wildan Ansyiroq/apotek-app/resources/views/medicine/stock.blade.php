@extends ('layouts.template')

@section('content')

    {{-- tempat alert berhasil --}}

    <div id="msg-success"></div>

    <table class="table table-striped table-bordered table-hovered">

        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @php $no = 1; @endphp
            @foreach ($medicines as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td style="background: {{ $item['stock'] <= 3 ? 'red' : 'none' }}">
                        {{ $item['stock'] }}
                    </td>

                    <td>
                        <div class="btn btn-primary" onclick="edit({{ $item['id'] }})">Tambah Stock</div>
                    </td>
                </tr>
            @endforeach


        </tbody>

    </table>


    {{-- pagination --}}
    <div class="d-flex justify-content-end">
        @if ($medicines->count())
            {{ $medicines->links() }}
        @endif
    </div>


    <!-- Modal -->
    <div class="modal fade" id="tambah-stock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data Stock</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="post" id="form-stock">

                    <div class="modal-body">

                        {{-- tempat alert error --}}

                        <div id="msg" ></div>

                        {{-- input hidden tidak akan tertampil, biasanya digunakan untuk menyimpan data yang diperlukan di proses BE ridak boleh diketahui/diubah user --}}
                        <input type="hidden" name="id" id="id">
                        <div>
                            <label for="name">nama : </label>
                            <input type="text" name="name" id="name" class="form-control" disabled>

                            <label for="stock">Stock : </label>
                            <input type="number" name="stock" id="stock" class="form-control">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
@endsection



@push('script')
    <script>

        // csrf token versi js
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content"),
            }
        });

        function edit(id) {
            // panggil route dari web.php yang akan menangani proses ambil satu data
            let url = "{{ route('medicine.show', 'id') }}";
            // ganti bagian 'id' di url nya jadi data dari parameter id di function nya
            url = url.replace('id', id);


            // pengambilan data dari FE ke BE dijembatani oleh jquery ajax
            $.ajax({
                // route nya pake method apa
                type: 'GET',
                // link route nya dari let url
                url: url,
                // data yang dihasilin bentuknya json
                contentType: 'json',
                //kalau proses ambil data berhasil, ambil data yang dikirim ke BE lewat parameter res
                success: function(res) {
                    // munculkan modal yang id nya tambah-stock
                    $('#tambah-stock').modal("show");
                    // isi value input dari hasil response BE
                    $('#name').val(res.name);
                    $('#stock').val(res.stock);
                    $('#id').val(res.id);
                }

            });
        }

        //ketika dorm dengan id="form-stock" button submit nya di klik
        $("#form-stock").submit(function(e) {
            // element form penanganan action nya akan diambil alih (ditanganni) oleh js
            e.preventDefault();
            // ambil value dari inputan id yang disembunyikan, untuk mengisi path {id} di routenya
            let id = $("#id").val();
            // route action penanganan update data
            let url = "{{ route('medicine.stock.update', 'id') }}";
            url = url.replace('id', id);
            // buat variabel data yang akan dikirim ke BE

            let data = {
                stock: $("#stock").val(),
            }


            $.ajax({

                type : 'PATCH',
                url : url,
                data : data,
                cache : false,

                success: function(res) {

                    // jika berhasil, modal di hide
                    $("#tambah-stock").modal("hide");
                    // buat session js bernama ' successUpdateStock '
                    sessionStorage.successUpdateStock = true;
                    window.location.reload();
                },

                error: function(err) {

                    //kalau terjadi error, pada element id = "msg" tambah class dengan value alert alert-danger
                    $("#msg").attr("class", "alert alert-danger");
                    // isi text element id = "msg" diambil dari respon json bagian massasge
                    $("#msg").text(err.responseJSON.message);

                }


            })

        });

        // function tanpa nama akan dijalankan ketika web baru selesai loading 
        $(function() {
            if (sessionStorage.successUpdateStock) {
                $("#msg-success").attr("class", "alert alert-success");
                $("#msg-success").text("Berhasil mengubah data stock!");

                // hapus kembali data session setelah alert success dimunculkan
                sessionStorage.clear();
            }
        })
    </script>
@endpush
