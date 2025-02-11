<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'usersId',
        'state',
        'revisorId',
        'modifiedDate',
        'request',
    ];

    // $table->foreignId('usersId')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
    //         $table->enum('state', ['nuovo', 'in lavorazione', 'chiuso'])->default('nuovo');
    //         $table->foreignId('revisorId')->nullable()->references('id')->on('users')->constrained('users')->onDelete('cascade');
    //         $table->timestamp('modifiedDate')->useCurrent()->useCurrentOnUpdate();
    //         $table->text('request');

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function revisor()
    {
        return $this->belongsTo(User::class);
    }
}
