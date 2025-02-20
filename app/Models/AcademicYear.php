<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;

    protected $primaryKey = 'academic_year_id';
    protected $fillable = ['academic_year'];

    public function intakes()
    {
        return $this->hasMany(Intake::class, 'academic_year_id');
    }
}
