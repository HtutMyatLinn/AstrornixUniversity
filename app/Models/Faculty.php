<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $primaryKey = 'faculty_id';
    protected $fillable = ['faculty', 'contact_number'];

    public function users()
    {
        return $this->hasMany(User::class, 'faculty_id');
    }
}
