<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contracts';

    protected $fillable = [
        'ad_id',
        'state',
        'work_start',
        'work_end',
        'ammount',
        'state_payment',
        'attachment_id',
        'user_id',
        'recipient_id',
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
