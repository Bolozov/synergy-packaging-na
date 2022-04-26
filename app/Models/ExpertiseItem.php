<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ExpertiseItem
 *
 * @package App\Models
 * @version December 12, 2021, 8:01 am UTC
 * @property string $title_fr
 * @property int $id
 * @property int $expertise_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem newQuery()
 * @method static \Illuminate\Database\Query\Builder|ExpertiseItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem whereExpertiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem wheretitle_fr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExpertiseItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ExpertiseItem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ExpertiseItem withoutTrashed()
 * @mixin Model
 */
class ExpertiseItem extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'expertise_items';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_fr',
        'title_en',
        'expertise_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title_fr' => 'string',
        'title_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_fr' => 'required',
        'title_en' => 'required'
    ];


}
