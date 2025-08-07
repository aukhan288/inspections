<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    
    protected $fillable = ['tag_id', 'name'];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    
}
