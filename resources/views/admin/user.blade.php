@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('common.left-side-bar')
        <div class="col-md-9 col-lg-10 p-5">
            <div class="card p-4">
                <h3 class="mb-4 text-center">Create New User</h3>
                <form method="POST" action="{{ route('create-user') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role_id" id="role" class="form-select" required>
                            <option value="">Select role</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection