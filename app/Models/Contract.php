<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contracts';

    protected $fillable = [
        'adsId',
        'state',
        'workStart',
        'workEnd',
        'ammount',
        'statePayment',
        'attachmentsId',
        'usersId',
        'recipientId',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'usersId');
    }

    public function usersRecipient()
    {
        return $this->belongsTo(User::class, 'recipientId');
    }

    public function ads() 
    {
        return $this->belongsTo(Ad::class);
    }
}
