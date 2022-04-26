<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Project
 * @package App\Models
 * @version March 10, 2022, 2:24 pm UTC
 *
 * @property string $titre
 * @property string $image
 */
class Project extends Model
{
    use SoftDeletes;


    public $table = 'projects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titre',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titre' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titre' => 'required',
        'image' => 'image|required'
    ];

    
}
