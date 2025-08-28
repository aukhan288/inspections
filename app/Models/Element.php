<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Element extends Model
{
     use HasFactory;
       protected $fillable = [
        'name',
      ];
}
