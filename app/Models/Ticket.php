<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'usersId',
        'state',
        'revisorId',
        'modifiedDate',
        'request',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function revisor()
    {
        return $this->belongsTo(User::class);
    }
}
