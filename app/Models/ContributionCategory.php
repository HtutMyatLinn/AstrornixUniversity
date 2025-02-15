<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContributionCategoryID';
    protected $fillable = ['ContributionCategory'];

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'ContributionCategoryID');
    }
}
