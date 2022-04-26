<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class ClientCarousel
 * @package App\Models
 * @version January 20, 2022, 12:03 pm UTC
 *
 * @property string $entreprise
 * @property string $logo
 */
class ClientCarousel extends Model
{
    use SoftDeletes;


    public $table = 'client_carousels';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'entreprise',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'entreprise' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'entreprise' => 'required|string',
        'logo' => 'required|image|mimes:jpeg,png,jpg|max:1024'
    ];


}
