<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'usersInformations';

    protected $fillable = [
        'userId',
        'name',
        'surname',
        'nameCompany',
        'pIva',
        'address',
        'city',
        'cap',
        'pec',
        'sdi',
        'siteLink',
        'state',
        'currency',
        'mobileNumber',        
    ];

    public function users() 
    {
        return $this->belongsTo(User::class);
    }

}
