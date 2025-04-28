@extends('layouts.app')

@section('title', 'Create Role')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('common.left-side-bar')
        <div class="col-md-9 col-lg-10 p-5">
            <div class="card p-4">
                <h3 class="mb-4 text-center">Create New Role</h3>
                <form method="POST" action="{{ route('create-role') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label d-block">Assign Permission</label>
                        @foreach($permissions as $permission)
                        <input type="checkbox" id="permission" name="permissions[]" value="{{ $permission->id }}">
                        <label for="">{{ $permission->name }}</label>
                        @endforeach
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-center btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection