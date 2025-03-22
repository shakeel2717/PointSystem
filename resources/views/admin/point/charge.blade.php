@extends('layouts.app')
@section('content')
    <div class="row gap-2 mt-4">
        <form action="{{ route('admin.point.charge.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                <label for="phone">Phone</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
                <label for="amount">Amount</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="type" placeholder="Enter type" name="type">
                <label for="type">Service Type</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <textarea name="reference" class="form-control" id="reference"></textarea>
                <label for="reference">Reference (Optional)</label>
            </div>

            <div class=" mb-3 mt-3">
                <button type="submit" class="btn btn-warning btn-lg text-white">Charge Point</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 mt-5">
                <h4 class="card-title">Recent Transactions</h4>
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
            </div>
        </div>
    </div>
@endsection
