<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = 'comment_id';
    protected $fillable = ['user_id', 'contribution_id', 'comment_text', 'comment_date'];

    public function contribution()
    {
        return $this->belongsTo(Contribution::class, 'contribution_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
