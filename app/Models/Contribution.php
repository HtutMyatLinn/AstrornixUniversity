<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    protected $primaryKey = 'ContributionID';
    protected $fillable = ['IntakeID', 'ContributionCategoryID', 'ContributionTitle', 'ContributionFilePath', 'UserID', 'SubmittedDate', 'ContributionStatus', 'ViewCount'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function intake()
    {
        return $this->belongsTo(Intake::class, 'IntakeID');
    }

    public function category()
    {
        return $this->belongsTo(ContributionCategory::class, 'ContributionCategoryID');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'ContributionID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'ContributionID');
    }

    public function images()
    {
        return $this->hasMany(ContributionImage::class, 'ContributionID');
    }
}
