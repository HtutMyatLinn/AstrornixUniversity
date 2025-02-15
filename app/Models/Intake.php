<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    use HasFactory;

    protected $primaryKey = 'IntakeID';
    protected $fillable = ['Intake', 'AcademicYearID', 'ClosureDate', 'FinalClosureDate'];

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'AcademicYearID');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'IntakeID');
    }
}
