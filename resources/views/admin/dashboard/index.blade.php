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
            <div class="card border-0 mt-5">
                <h4 class="card-title">Recent Transactions</h4>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="bg-white shadow-sm border-muted rounded-3 border">
                                <th class="text-muted text-start">Ali Hassan <br> <small class="fw-light">1 day
                                        ago</small></th>
                                <th class="text-muted text-end">{{ number_format(213, 2) }} Points <br> <small
                                        class="fw-light">Hair Cutting</small></th>
                                <td class="text-muted text-end"></td>
                            </tr>
                            <tr class="bg-white shadow-sm border-muted rounded-3 border">
                                <th class="text-muted text-start">Ali Hassan <br> <small class="fw-light">1 day
                                        ago</small></th>
                                <th class="text-muted text-end">{{ number_format(213, 2) }} Points <br> <small
                                        class="fw-light">Hair Cutting</small></th>
                                <td class="text-muted text-end"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
