<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class ExpertiseImages
 * @package App\Models
 * @version January 20, 2022, 10:52 am UTC
 *
 * @property \App\Models\Expertise $expertise
 * @property string $image
 */
class ExpertiseImages extends Model
{
    use SoftDeletes;


    public $table = 'expertise_images';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'expertise_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function expertise()
    {
        return $this->belongsTo(\App\Models\Expertise::class);
    }
}
