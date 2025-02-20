<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $primaryKey = 'feedback_id';
    protected $fillable = ['contribution_id', 'user_id', 'feedback_given_date', 'feedback'];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class, 'contribution_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
