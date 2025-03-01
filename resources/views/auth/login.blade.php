@extends('layouts.app')
@section('content')
    <div class="my-4">
        <img src="{{ asset('logo-vr.png') }}" alt="Logo">
    </div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-floating mb-3 mt-3">
            <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            <label for="phone">Phone</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            <label for="password">Password</label>
        </div>

        <div class="my-4">
            <button type="submit" class="btn btn-warning text-white btn-lg">Sign In</button>
        </div>
        <div class="text-center">
            <a href="{{ route('register') }}" class="btn text-muted">Don't have an Account?</a>
        </div>
    </form>
@endsection
