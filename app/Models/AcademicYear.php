<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;

    protected $primaryKey = 'AcademicYearID';
    protected $fillable = ['AcademicYear'];

    public function intakes()
    {
        return $this->hasMany(Intake::class, 'AcademicYearID');
    }
}
