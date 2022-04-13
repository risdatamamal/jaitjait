@extends('layouts.admin')

@section('title')
    Dashboard Article - Jait Jait
@endsection

@section('content')
    <div class="mt-5 container">
        <h2 class="fw-bold fs-2">Articles Data</h2>
        <p>List of Articles</p>
        <hr />
        @if ($notification = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>"{{ $notification }}"</strong>
            </div>
        @endif
        @if ($notification = Session::get('failed'))
            <div class="alert alert-danger">
                <strong>"{{ $notification }}"</strong>
            </div>
        @endif
        <div class="card">
            <div class="mt-2 d-flex justify-content-between px-4 py-2">
                <a href="" class="btn btn-primary rounded-pill text-center"><i
                        class="bi bi-plus-circle"></i> Create</a>
            </div>
            <hr />
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical" border="1" id="crudTable">
                        <thead>
                            <tr style="background-color: #e2e2e2">
                                <th>No</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Date</th>
                                <th>Author</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->body }}</td>
                                    <td>{{ $article->date }}</td>
                                    <td>{{ $article->author }}</td>
                                    {{-- <td>
                                        <div class="d-flex justify-content-evenly">
                                            <a href="{{ route('user.edit', $user->id) }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                {!! method_field('delete') . csrf_field() !!}
                                                <button type="submit"><i class="fas fa-trash"
                                                        onclick="return confirm('Anda yakin ingin menghapus data?')"></i></button>
                                            </form>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable();
    </script>
@endpush
