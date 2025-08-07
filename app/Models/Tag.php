<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'haseoptons',
    ];

    public function measures()
    {
        return $this->belongsToMany(Measure::class);
    }
}
