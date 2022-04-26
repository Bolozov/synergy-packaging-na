<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Setting
 *
 * @package App\Models
 * @version December 12, 2021, 4:05 am UTC
 * @property string $contact_mail
 * @property integer $phone_number
 * @property string $adress
 * @property string $facbook_link
 * @property string $youtube_link
 * @property string $twitter_link
 * @property string $instagram_link
 * @property string $linkedin_link
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Query\Builder|Setting onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereContactMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereFacbookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInstagramLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLinkedinLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTwitterLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereYoutubeLink($value)
 * @method static \Illuminate\Database\Query\Builder|Setting withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Setting withoutTrashed()
 * @mixin Model
 */
class Setting extends Model
{
    use SoftDeletes;

    public $table = 'settings';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'contact_mail',
        'phone_number',
        'fax_number',
        'address',
        'facbook_link',
        'youtube_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'contact_mail' => 'string',
        'phone_number' => 'string',
        'fax_number' => 'string',
        'address' => 'string',
        'facbook_link' => 'string',
        'youtube_link' => 'string',
        'twitter_link' => 'string',
        'instagram_link' => 'string',
        'linkedin_link' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'contact_mail' => 'required|email',
        'phone_number' => 'required|string',
        'fax_number' => 'nullable|string',
        'address' => 'nullable|string',
        'facbook_link' => 'nullable',
        'youtube_link' => 'nullable',
        'twitter_link' => 'nullable',
        'instagram_link' => 'nullable',
        'linkedin_link' => 'nullable',
    ];

}
