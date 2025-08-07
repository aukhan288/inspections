<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubTag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function measures()
    {
        return $this->belongsToMany(Measure::class);
    }
}
