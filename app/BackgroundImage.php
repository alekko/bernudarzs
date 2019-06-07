<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class BackgroundImage extends Model
{
    protected $table = 'background_images';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'picture'
    ];

}
