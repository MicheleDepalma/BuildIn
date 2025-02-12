<?php

namespace App\Models;

use App\Livewire\PrivateUsers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'adsId',
        'usersId',
        'recipientId',
        'ammount',
        'workStartDate',
        'workEndDate',
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
