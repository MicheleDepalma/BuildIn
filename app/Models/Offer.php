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
        'ad_id',
        'user_id',
        'recipient_id',
        'ammount',
        'work_start_date',
        'work_end_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userRecipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

    public function ad() 
    {
        return $this->belongsTo(Ad::class);
    }
}
