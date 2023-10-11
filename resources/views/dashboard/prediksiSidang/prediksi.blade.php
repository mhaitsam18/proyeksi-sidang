@extends('dashboard.layouts.main')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-0 text-gray-800 me-auto text-center mb-3 p-2">Laporan Mahasiswa Siap Sidang</h1>

<div class="d-sm-flex align-items-center mb-4">

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i
        class="fas fa-download fa-sm text-white-50"></i> Proses</a>

    <button type="button" class="btn btn-sm btn-success shadow-sm mr-2" data-bs-toggle="modal" data-bs-target="#upload">
        <i class="fas fa-upload fa-sm text-white-50 mr-1"></i>Unggah
    </button>

    <a href="/download-prediksi-sidang-pdf" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm border" target="_blank"><i
        class="fas fa-download fa-sm text-black-50"></i> Cetak Laporan</a>

    <form action="/dashboard/prediksi" method="get" class="d-none d-sm-inline-block ms-auto shadow" >
                {{-- @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif --}}
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Cari.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn text-white" type="submit " style="background-color: #cc0000">Cari</button>
                </div>
    </form>
</div>
<!-- Content Row -->
<div class="row">

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Mahasiswa</th>
                    <th scope="col">Pbb 1</th>
                    <th scope="col">Pbb 2</th>
                    <th scope="col">Periode Sidang</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $data)

                    <tr>
                        <td>{{ $datas->firstItem() + $key }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->pbb1 }}</td>
                        <td>{{ $data->pbb2 }}</td>
                        <td>{{ $data->periode_sidang }}</td>

                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $datas->links() }}
        </div>
    </div>

</div>

<!-- Formulir Row -->
<!-- modal input -->
<!-- Modal -->
@include('dashboard.prediksiSidang.modal')
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-0">
                <label for="formFile" class="form-label">Contoh Data Untuk di upload</label><br>
                <a href="https://drive.google.com/drive/folders/1qg4SEm0TC3VUFVGW8r5fzjdbF7UbHXL9?usp=sharing" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm border" target="_blank"><i
                    class="fas fa-download fa-sm text-black-50 mr-2"></i>Contoh Data</a>
              </div>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="formFile" class="form-label">Silahkan Upload Datanya</label>
                <input class="form-control" type="file" id="formFile">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Upload</button>
        </div>
      </div>
    </div>
</div> --}}
<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
</div>

@endsection
