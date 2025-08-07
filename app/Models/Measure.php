<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function subTags()
    {
        return $this->belongsToMany(SubTag::class);
    }
}
