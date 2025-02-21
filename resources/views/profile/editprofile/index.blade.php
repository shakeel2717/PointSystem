@extends('layouts.app')
@section('content')
    <div class="my-4">
        <img src="{{ asset('logo-vr.png') }}" alt="Logo">
    </div>
    <form action="{{ route('editprofile.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{auth()->user()->name}}">
            <label for="name">Name</label>
        </div>

        <div class="form-floating mb-3 mt-3">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{auth()->user()->email}}">
            <label for="email">Email</label>
        </div>

       
        <div class="my-4">
            <button type="submit" class="btn btn-warning text-white btn-lg">Update Profile</button>
        </div>
       
    </form>
@endsection
