<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeasureInstallation extends Model
{
    use HasFactory;

    protected $fillable = [
        'measure_id',
        'installation',
    ];

    /**
     * Relationship: Each installation belongs to a measure.
     */
    public function measure()
    {
        return $this->belongsTo(Measure::class);
    }
}
