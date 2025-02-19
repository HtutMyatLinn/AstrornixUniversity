<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'UserID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'UserID',
        'Username',
        'FirstName',
        'LastName',
        'Email',
        'Password',
        'FacultyID',
        'RoleID',
        'LastLoginDate',
        'LastPasswordChangedDate',
        'PasswordExpiredDate',
        'ProfileImage',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'RoleID');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'FacultyID');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'UserID');
    }

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class, 'UserID');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'UserID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'UserID');
    }
}
