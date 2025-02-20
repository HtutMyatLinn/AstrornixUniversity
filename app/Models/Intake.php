<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    use HasFactory;

    protected $primaryKey = 'intake_id';
    protected $fillable = ['intake', 'academic_year_id', 'closure_date', 'final_closure_date'];

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'intake_id');
    }
}
