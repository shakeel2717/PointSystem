<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    /** @use HasFactory<\Database\Factories\PointFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'type', 'sum', 'reference'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
