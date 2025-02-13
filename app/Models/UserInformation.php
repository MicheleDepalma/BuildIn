<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'userInformations';

    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'name_company',
        'p_iva',
        'address',
        'city',
        'cap',
        'pec',
        'sdi',
        'site_link',
        'state',
        'currency',
        'mobile_number',        
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

}
