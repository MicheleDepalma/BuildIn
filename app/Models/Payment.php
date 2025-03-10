<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'cardHolder',
        'cardNumber',
        'cardExpiration',
        'cvv',
    ];

    public function users() 
    {
        return $this->belongsTo(User::class);
    }
}
