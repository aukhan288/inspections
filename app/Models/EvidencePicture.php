<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvidencePicture extends Model
{
    use HasFactory;

    protected $fillable = [
        'installation_evidence_id',
        'path',
    ];

    public function evidence()
    {
        return $this->belongsTo(InstallationEvidence::class, 'installation_evidence_id');
    }
}
