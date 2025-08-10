<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_contact',
        'scheduled_at',
        'type',
        'status',
        'installer_id',
        'inspector_id',
        'notes',
    ];

    public function installer()
    {
        return $this->belongsTo(User::class, 'installer_id');
    }

    public function inspector()
    {
        return $this->belongsTo(User::class, 'inspector_id');
    }
}
