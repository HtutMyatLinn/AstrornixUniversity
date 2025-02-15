<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = 'CommentID';
    protected $fillable = ['UserID', 'ContributionID', 'CommentText', 'CommentDate'];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class, 'ContributionID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
