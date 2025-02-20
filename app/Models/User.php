<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
        'faculty_id',
        'role_id',
        'last_login_date',
        'last_password_changed_date',
        'password_expired_date',
        'profile_image',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'user_id');
    }

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class, 'user_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
}
