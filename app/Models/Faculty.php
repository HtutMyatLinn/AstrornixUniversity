<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $primaryKey = 'FacultyID';
    protected $fillable = ['Faculty', 'ContactNumber'];

    public function users()
    {
        return $this->hasMany(User::class, 'FacultyID');
    }
}
