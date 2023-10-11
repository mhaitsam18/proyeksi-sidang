@extends('dashboard.layouts.main')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-0 text-gray-800 me-auto text-center mb-3 p-2">Periode Sidang</h1>
<div class="d-sm-flex">

</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm mr-2 border"><i
            class="fas fa-download fa-sm text-black-50"></i> Cetak Laporan</a>

    <form action="/dashboard/proyeksi" method="get" class="d-none d-sm-inline-block shadow" >
                {{-- @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif --}}
                <div class="input-group">
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
                    <th scope="col">Prediksi Sidang</th>
                    <th scope="col">Proyeksi Sidang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($datas as $key => $data)

                    <tr>
                        <td>{{ $datas->firstItem() + $key }}</td>
                        <td>{{ $data->prediksisidang->nim }}</td>
                        <td>{{ $data->prediksisidang->nama }}</td>
                        <td>{{ $data->prediksisidang->pbb1 }}</td>
                        <td>{{ $data->prediksisidang->pbb2 }}</td>
                        <td>{{ $data->prediksisidang->periode_sidang, 'MMM-YY' }}</td>
                        <td>{{ $data->proyeksi_sidang }}</td>
                        <td>
                            {{-- <a href="" class="badge bg-warning"><i class="fas fa-fw fa-pen-to-square"></i></a> --}}
                            <button type="button" class="btn btn-sm btn-warning" data-myproyeksi="{{ $data->proyeksi_sidang }}" data-bs-toggle="modal" data-bs-target="#edit-{{ $data->id }}">
                                <i class="fas fa-fw fa-pen-to-square"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $datas->links() }}
        </div>
    </div>

</div>

<!-- Content Row -->

<!-- Formulir Row -->
<!-- modal input -->
<!-- Modal -->

@include('dashboard.proyeksiSidang.modal')
<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
</div>

@endsection
