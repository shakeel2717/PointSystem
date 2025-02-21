@extends('layouts.app')
@section('content')
    <div class="my-4">
        <img src="{{ asset('logo-vr.png') }}" alt="Logo">
    </div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name">
            <label for="name">Full Name</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            <label for="email">Email</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            <label for="phone">Phone</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            <label for="password">Password</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password_confirmation" placeholder="Enter password"
                name="password_confirmation">
            <label for="password_confirmation">Confirm Password</label>
        </div>

        <div class="my-4">
            <button type="submit" class="btn btn-warning text-white btn-lg">Create Account</button>
        </div>
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn text-muted">Already have an Account?</a>
        </div>
    </form>
@endsection
