<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Candidate
 * @package App\Models
 * @version April 25, 2022, 2:33 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $date_of_birth
 * @property string $position
 * @property string $cv
 * @property string $cover_letter
 */
class Candidate extends Model
{
    use SoftDeletes;


    public $table = 'candidates';
    

    protected $dates = ['deleted_at , date_of_birth'];



    public $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'position',
        'cv',
        'cover_letter'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => 'date',
        'position' => 'string',
        'cv' => 'string',
        'cover_letter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'date_of_birth' => 'required|date',
        'position' => 'required',
        'cv' => 'required|file|mimes:pdf,docx,doc|max:2048',
        'cover_letter' => 'required|file|mimes:pdf,docx,doc|max:2048'
    ];

    
}
