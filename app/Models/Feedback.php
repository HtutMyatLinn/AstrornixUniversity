<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $primaryKey = 'FeedbackID';
    protected $fillable = ['ContributionID', 'UserID', 'FeedbackGivenDate', 'Feedback'];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class, 'ContributionID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
