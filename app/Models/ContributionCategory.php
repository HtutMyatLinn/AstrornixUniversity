<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'contribution_category_id';
    protected $fillable = ['contribution_category'];

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'contribution_category_id');
    }
}
