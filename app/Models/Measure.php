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
        return $this->belongsToMany(SubTag::class, 'measure_sub_tags', 'measure_id', 'sub_tag_id');
    }
    public function questions()
    {
        return $this->hasMany(question::class);
    }
    public function installations()
{
    return $this->hasMany(MeasureInstallation::class);
}
}
