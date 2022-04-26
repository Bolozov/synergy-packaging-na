<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceImages extends Model
{
    use HasFactory;

    public $table = 'reference_images';

    protected $fillable = ['image' , 'reference_id'];


}
