<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContributionImageID';
    protected $fillable = ['ContributionImagePath', 'ContributionID'];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class, 'ContributionID');
    }
}
