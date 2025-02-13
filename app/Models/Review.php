<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'recipient_id',
        'vote',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userRecipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

}
