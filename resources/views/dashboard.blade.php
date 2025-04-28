@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('common.left-side-bar')
        <div class="col-md-9 col-lg-10 p-4">
            <h2>Welcome, {{ Auth::user()->name ?? 'User' }} 👋</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card p-3 text-center shadow-sm">
                        <h5>Total Users</h5>
                        <h3>150</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center shadow-sm">
                        <h5>Sales</h5>
                        <h3>$3,200</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center shadow-sm">
                        <h5>Tasks</h5>
                        <h3>23</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection