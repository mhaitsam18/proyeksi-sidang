@extends('dashboard.layouts.main')

@section('container')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Cerak Report</a>
</div>
<!-- Content Row -->
<div class="row">

    <div class="table-responsive col-lg-9">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($posts as $post) --}}
                    {{-- <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                        </td>
                    </tr> --}}
                    <tr>
                        <td>1</td>
                        <td>Gandi</td>
                        <td>Bujang</td>
                        <td>
                            <a href="" class="badge bg-info"><i class="data-feather = eye"></i></a>
                            <a href="" class="badge bg-warning"><i class="fas fa-fw fa-pen-to-square"></i></a>
                            <a href="" class="badge bg-danger"><i data-feather="x-circle"></i></a>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>

</div>

<!-- Content Row -->

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
</div>

@endsection
