@extends('layouts.app')
@section('content')
    <div class="my-4">
        <img src="{{ asset('logo-vr.png') }}" alt="Logo">
    </div>
    <form action="{{ route('editpassword.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            <label for="password">Current Password</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            <label for="password">New Password</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="password_confirmation" placeholder="Enter password"
                name="password_confirmation">
            <label for="password_confirmation">Confirm Password</label>
        </div>

       
        <div class="my-4">
            <button type="submit" class="btn btn-warning text-white btn-lg">Update Password</button>
        </div>
       
    </form>
@endsection
