<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
     use HasFactory;

    protected $fillable = [
        'measure_id',
        'content',
        'type',
    ];

    // Optional: Relationship to Measure
    public function measure()
    {
        return $this->belongsTo(Measure::class);
    }
}
