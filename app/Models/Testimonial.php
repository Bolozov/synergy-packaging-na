<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Testimonial
 * @package App\Models
 * @version January 13, 2022, 7:18 am UTC
 *
 * @property string $name
 * @property string $entreprise
 * @property string $testimonial
 */
class Testimonial extends Model
{
    use SoftDeletes;


    public $table = 'testimonials';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'entreprise',
        'testimonial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'entreprise' => 'string',
        'testimonial' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        'entreprise' => 'nullable|string',
        'testimonial' => 'required|string'
    ];

    
}
