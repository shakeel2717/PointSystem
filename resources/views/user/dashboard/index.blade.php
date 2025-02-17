@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <h1>{{ number_format(4654, 2) }}</h1>
            <h5>Available Points</h5>
        </div>
    </div>

    <div class="row gap-2">
        <div class="col-md-12">
            <div class="card bg-warning border-0 shadow">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0">Spend This Month</h6>
                        <h6 class="mb-0"><i class="bi bi-dash-circle"></i> {{ number_format(4654, 2) }} Points</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card bg-warning border-0 shadow">
                <div class="card-body text-white">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0">Total Collection</h6>
                        <h6 class="mb-0"><i class="bi bi-plus-circle"></i> {{ number_format(123465, 2) }} Points</h6>
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
                                <tr>
                                    <th class="text-muted text-start">Hair Cutting</th>
                                    <td class="text-muted text-end">{{ number_format(213, 2) }} Points</td>
                                </tr>
                                <tr>
                                    <th class="text-muted text-start">Hair Cutting</th>
                                    <td class="text-muted text-end">{{ number_format(213, 2) }} Points</td>
                                </tr>
                                <tr>
                                    <th class="text-muted text-start">Hair Cutting</th>
                                    <td class="text-muted text-end">{{ number_format(213, 2) }} Points</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
