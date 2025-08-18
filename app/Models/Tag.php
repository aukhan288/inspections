<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'haseoptions',
    ];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
    
    public function subTags()
    {
        return $this->belongsToMany(SubTag::class, 'tag_sub_tag', 'tag_id', 'sub_tag_id');
    }
}
