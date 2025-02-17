@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 mt-5">
                <h4 class="card-title">All Transactions</h4>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            @foreach ($points as $point)
                                <tr class="bg-white shadow-sm border-muted rounded-3 border">
                                    <th class="text-muted text-start">{{ $point->user->name }} <br> <small
                                            class="fw-light">{{ $point->created_at->diffForHumans() }}</small></th>
                                    <th class="text-muted text-end">{{ number_format($point->amount, 2) }} Points <br>
                                        <small class="fw-light">{{ $point->type }}</small>
                                    </th>
                                    <td class="text-muted text-end"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            {{ $points->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
