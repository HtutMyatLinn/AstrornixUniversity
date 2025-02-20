<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'contribution_image_id';
    protected $fillable = ['contribution_image_path', 'contribution_id'];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class, 'contribution_id');
    }
}
