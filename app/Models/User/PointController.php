<?php

namespace App\Models\User;

use App\Models\Point;
use Illuminate\Database\Eloquent\Model;

class PointController extends Model
{
    public function index()
    {
        $points = Point::where('user_id', auth()->id())->latest()->simplePaginate(10);
        return view('user.point.index', compact('points'));
    }
}
