<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\ReferenceImages;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reference
 *
 * @package App\Models
 * @version December 12, 2021, 3:11 am UTC
 * @property string $title
 * @property string $client
 * @property string $mission
 * @property string $lieu
 * @property string $image
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Reference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reference newQuery()
 * @method static \Illuminate\Database\Query\Builder|Reference onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Reference query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereLieu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reference whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Reference withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Reference withoutTrashed()
 * @mixin Model
 */
class Reference extends Model
{
    use SoftDeletes;

    public $table = 'references';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'title_fr',
        'title_en',
        'client',
        'mission_fr',
        'mission_en',
        'lieu',
        'image',
        'domaine',
        'creation_date'
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
        'client' => 'string',
        'mission_fr' => 'string',
        'mission_en' => 'string',
        'lieu' => 'string',
        'image' => 'string',
        'domaine' => 'string',
        'creation_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_fr' => 'required|string',
        'title_en' => 'required|string',
        'client' => 'required|string',
        'mission_fr' => 'required|string',
        'mission_en' => 'required|string',
        'lieu' => 'required|string',
        'domaine' => 'nullable|string',
        'creation_date' => 'nullable|date',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        'images' => 'nullable',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:1024',
    ];

    public function images()
    {
        return $this->hasMany(ReferenceImages::class);
    }

}
