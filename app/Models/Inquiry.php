<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $primaryKey = 'InquiryID';
    protected $fillable = ['UserID', 'InquiryDate', 'InquiryStatus', 'PriorityLevel', 'ResponseDate'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
