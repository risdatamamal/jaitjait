@extends('layouts.admin')

@section('title')
    Dashboard User - Jait Jait
@endsection

@section('content')
    <div class="mt-5 container">
        <h2 class="fw-bold fs-2">Users Data</h2>
        <p>List of Users</p>
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
                <a href="{{ route('users.create') }}" class="btn btn-primary rounded-pill text-center"><i
                        class="bi bi-plus-circle"></i> Create</a>
            </div>
            <hr />
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical" border="1" id="crudTable">
                        <thead>
                            <tr style="background-color: #e2e2e2">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Roles</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-evenly">
                                            <a href="{{ route('users.edit', $user->id) }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                {!! method_field('delete') . csrf_field() !!}
                                                <button type="submit"><i class="fas fa-trash"
                                                        onclick="return confirm('Anda yakin ingin menghapus data?')"></i></button>
                                            </form>
                                        </div>
                                    </td>
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
