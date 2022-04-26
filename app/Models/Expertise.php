<?php

namespace App\Models;

use App\Models\ExpertiseItem;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Expertise
 *
 * @package App\Models
 * @version December 12, 2021, 6:38 am UTC
 * @property string $title_fr_fr
 * @property string $items
 * @property string $image
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|ExpertiseItem[] $expertises
 * @property-read int|null $expertises_count
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise newQuery()
 * @method static \Illuminate\Database\Query\Builder|Expertise onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise wheretitle_fr_fr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expertise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Expertise withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Expertise withoutTrashed()
 * @mixin Model
 */
class Expertise extends Model
{
    use SoftDeletes;

    public $table = 'expertises';

    protected $dates = ['deleted_at'];

    protected $with = ['expertises'];

    public $fillable = [
        'title_fr',
        'title_en',
        // 'image',
        'domaine',
        'logo',
        'youtube',
        'brochure'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_fr' => 'string',
        'title_en' => 'string',
        // 'image' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_fr' => 'required',
        'title_en' => 'required',
        'expertise' => 'required|array|min:1',
        'domaine' => 'nullable',
        'images' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:1024',
        'logo' => 'image|mimes:jpeg,png,jpg|max:1024',
        'brochure' => 'file|mimes:pdf|max:10240',

    ];

    public function expertises()
    {
        return $this->hasMany(ExpertiseItem::class);
    }

    /**
     * Get all of the images for the Expertise
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ExpertiseImages::class);
    }

}
