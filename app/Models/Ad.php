<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $fillable = [
        'categories',
        'subCategories',
        'city',
        'budgetMin',
        'budgetMax',
        'squareMeters',
        'description',
        'title',
        'imageId',
        'serviceType',
        'buildingCategories',
        'localCategories',
        'address',
        'cap',
        'usersId',
        'recipientId',
    ];
    //COSTANTI CATEGORY
    const LAVORI_PRIVATI = 'Lavori Privati';
    const APPALTI = 'Appalti';
    const SUBAPPALTI = 'Subappalti';
    const CHIAVI_IN_MANO = 'Chiavi in Mano'; 
    
    //COSTANTI SUBCATEGORY
    const MATERIALI = 'Materiali';
    const EDILIZIA = 'Edilizia';
    const SERVIZI_TECNICI = 'Servizi Tecnici';
    const TRASLOCHI = 'Traslochi';

    //COSTANTI SERVICE TYPE
    const RISTRUTTURAZIONE = 'Ristrutturazione';
    const MANUTENZIONE = 'Manutenzione';

    //COSTANTI BUILDING CATEGORIES
    const RESIDENZIALE = 'Residenziale';
    const CAPANNONE = 'Capannone';
    const NEGOZI_LOCALI_COMMERCIALI = 'Negozi - Locali commerciali';
    const PALAZZI_EDIFICI = 'Palazzi - Edifici';
    const UFFICIO = 'Ufficio';

    //COSTANTI LOCAL CATEGORIES
    const MONOLOCALE = 'Monolocale';
    const BILOCALE = 'Bilocale';
    const TRILOCALE = 'Trilocale';
    const QUADRILOCALE = 'Quadrilocale';
    const VILLA = 'Villa';
    const PALAZZINA = 'Palazzina';
    
    public const CATEGORIES = [
        self::LAVORI_PRIVATI,
        self::APPALTI,
        self::SUBAPPALTI,
        self::CHIAVI_IN_MANO,
        self::MATERIALI
    ];
    public const SUBCATEGORIES = [
        self::MATERIALI,
        self::EDILIZIA,
        self::SERVIZI_TECNICI,
        self::TRASLOCHI
    ];
    public const SERVICE_TYPE = [
        self::RISTRUTTURAZIONE,
        self::MANUTENZIONE
    ];
    
    public const BUILDING_CATEGORIES = [
        self::RESIDENZIALE,
        self::CAPANNONE,
        self::NEGOZI_LOCALI_COMMERCIALI,
        self::PALAZZI_EDIFICI,
        self::UFFICIO
    ];
    
    public const LOCAL_CATEGORIES = [
        self::MONOLOCALE,
        self::BILOCALE,
        self::TRILOCALE,
        self::QUADRILOCALE,
        self::VILLA,
        self::PALAZZINA,
    ];

    protected $casts = [
        'city' => 'array',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'usersId');
    }

    public function usersRecipient()
    {
        return $this->belongsTo(User::class, 'recipientId');
    }
    
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function contracts()
    {
        return $this->belongsTo(Contract::class);
    }
}
