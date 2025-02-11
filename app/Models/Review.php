<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'usersId',
        'recipientId',
        'vote',
        'description',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'usersId');
    }

    public function usersRecipient()
    {
        return $this->belongsTo(User::class, 'recipientId');
    }

}
