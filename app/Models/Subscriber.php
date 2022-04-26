<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Subscriber
 * @package App\Models
 * @version April 25, 2022, 12:46 pm UTC
 *
 * @property string $email
 */
class Subscriber extends Model
{
    use SoftDeletes;


    public $table = 'subscribers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required'
    ];

    
}
