@extends('layouts.app')
@section('content')
    <div class="row gap-2 mt-4">
        <div class="col-md-12">
            <div class="card bg-warning border-0 shadow">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0">Total Users</h6>
                        <h6 class="mb-0"> {{ number_format(4654, 2) }} Points</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card bg-warning border-0 shadow">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0">Total User's Points</h6>
                        <h6 class="mb-0"> {{ number_format(123465, 2) }} Points</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card bg-warning border-0 shadow">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0">Total Used Points</h6>
                        <h6 class="mb-0"> {{ number_format(123465, 2) }} Points</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mt-4">
                <div class="card-body">
                    <h4 class="card-title">Recent Transactions</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                @forelse ($points as $point)
                                    <tr>
                                        <th class="text-muted text-start">
                                            <h5>{{ $point->user->name }}</h5>
                                            <h6>{{ $point->type }}</h6>
                                        </th>
                                        <td class="text-muted text-end">
                                            {{ $point->sum ? '+' : '-' }}{{ number_format($point->amount, 2) }} Points</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th colspan="2" class="text-muted text-start">NO Transaction Found</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
