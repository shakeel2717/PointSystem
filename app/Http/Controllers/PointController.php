<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Http\Requests\StorePointRequest;
use App\Http\Requests\UpdatePointRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $points = Point::latest()->simplePaginate(10);
        return view('admin.point.index', compact('points'));
    }


    public function add()
    {
        $points = Point::where('sum', true)->get();
        return view('admin.point.add', compact('points'));
    }

    public function addStore(Request $request)
    {
        $validted = $request->validate([
            'phone' => 'required|numeric|exists:users',
            'amount' => 'required|numeric|digits_between:1,99999999999',
            'reference' => 'nullable|string',
        ]);

        $user = User::where('phone', $validted['phone'])->firstOrFail();

        $point = new Point();
        $point->user_id = $user->id;
        $point->amount = $validted['amount'];
        $point->type = 'Deposit';
        $point->sum = true;
        $point->reference = $validted['reference'];
        $point->save();

        return redirect()->route('admin.dashboard.index')->with('success', 'Point added successfully');
    }

    public function charge()
    {
        $points = Point::where('sum', false)->get();
        return view('admin.point.charge', compact('points'));
    }

    public function chargeStore(Request $request)
    {
        $validted = $request->validate([
            'email' => 'required|email|exists:users',
            'amount' => 'required|numeric|digits_between:1,99999999999',
            'type' => 'required|string',
            'reference' => 'nullable|string',
        ]);

        $user = User::where('email', $validted['email'])->firstOrFail();

        $point = new Point();
        $point->user_id = $user->id;
        $point->amount = $validted['amount'];
        $point->type = $validted['type'];
        $point->sum = false;
        $point->reference = $validted['reference'];
        $point->save();

        return redirect()->route('admin.dashboard.index')->with('success', 'Point Charged successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePointRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Point $point)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Point $point)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePointRequest $request, Point $point)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Point $point)
    {
        //
    }
}
