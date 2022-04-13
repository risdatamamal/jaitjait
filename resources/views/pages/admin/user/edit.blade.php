@extends('layouts.admin')

@section('title')
    Edit User
@endsection

@section('content')
    <!-- Section Content -->
    <div class="container mt-5">
        <form class="profile-form mx-auto pb-5" action="{{ route('users.update', $item->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <h2>Edit User</h2>
                <p>Edit user account at admin panel</p>

                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ $item->name }}" />
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="password" class="form-label mt-3">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="passwordHelp" id="password" />
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                
                {{-- Context passwordHelp --}}
                <div name="passwordHelp" class="form-text">
                    *Kosongkan jika tidak ingin mengganti password.
                </div>

                <label for="phone" class="form-label mt-3">Phone Number</label>
                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ $item->phone }}" />
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                
                <label for="email" class="form-label mt-3">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') ?? $item->email }}" aria-describedby="emailHelp" />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                {{-- Context emailHelp --}}
                <div name="emailHelp" class="form-text">
                    *We'll never share your email with anyone else.
                </div>

                <label for="role_id" class="form-label mt-3">Roles</label>
                <select id="role_id" name="role_id" required class="form-control @error('role_id') is-invalid @enderror">
                    <option value="1" {{ $item->role_id == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $item->role_id == 2 ? 'selected' : '' }}>Tailor</option>
                    <option value="3" {{ $item->role_id == 3 ? 'selected' : '' }}>User</option>
                </select>
                @error('role_id')
                    <div roles="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
@endsection