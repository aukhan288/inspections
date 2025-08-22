<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallationEvidence extends Model
{
    use HasFactory;

    protected $fillable = [
        'measure_installation_id',
        'evidence',
        'is_mandatory',
    ];

    public function installation()
    {
        return $this->belongsTo(MeasureInstallation::class, 'measure_installation_id');
    }
    
    public function pictures()
{
    return $this->hasMany(EvidencePicture::class, 'installation_evidence_id');
}

}
