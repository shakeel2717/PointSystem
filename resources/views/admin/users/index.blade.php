@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 mt-5">
                <h4 class="card-title">All Users ({{$users->count()}})</h4>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="bg-white shadow-sm border-muted rounded-3 border">
                                    <th class="text-muted text-start">{{ $user->name }} <br> <small
                                            class="fw-light">{{ $user->created_at->diffForHumans() }}</small></th>
                                    <th class="text-muted text-end">{{ number_format($user->balance(), 2) }} points <br>
                                        <small class="fw-light">{{ $user->phone }}</small>
                                    </th>
                                    <td class="text-muted text-end">
                                        <a href="{{ route('admin.point.password',['user_id' => $user->id]) }}" class="btn btn-primary">Update Password</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
