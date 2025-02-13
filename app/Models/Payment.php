<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments'; 

    protected $fillable = [
        'user_id',
        'card_holder',
        'card_number',
        'card_expiration',
        'cvv',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
