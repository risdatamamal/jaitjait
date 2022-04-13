@extends('layouts.admin')

@section('title')
    Create User
@endsection

@section('content')
    <!-- Section Content -->
    <div class="container mt-5">
        @if ($notification = Session::get('failed'))
            <div class="alert alert-danger">
                <strong>"{{ $notification }}"</strong>
            </div>
        @endif
        <form class="profile-form mx-auto pb-5" action="{{ route('users.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <h2>Create New User</h2>
                <p>Create for new user at admin panel</p>

                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" />
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="password" class="form-label mt-3">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required />
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="phone" class="form-label mt-3">Phone Number</label>
                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" />
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 

                <label for="email" class="form-label mt-3">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <div id="emailHelp" class="form-text">
                    *We'll never share your email with anyone else.
                </div>

                <label for="role_id" class="form-label mt-3">Roles</label>
                <select id="role_id" name="role_id" required class="form-control @error('role_id') is-invalid @enderror">
                    <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Tailor</option>
                    <option value="3" {{ old('role_id') == 3 ? 'selected' : '' }}>User</option>
                </select>
                @error('role_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
@endsection