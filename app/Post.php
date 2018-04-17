<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;
use carbon ;

class Post extends Model
{
    use Sluggable;


    protected $fillable = [
        //50d balk el 7agat de elle mab3ota fel request msh elle f database
        'title',
        'description',
        'user_id',
        'photo'

    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function user()
    {
        //User::class == 'App\User'
        return $this->belongsTo(User::class);
    }

    public function gethamadaAttribute($value)
    {
        return  Carbon\Carbon::parse($value)->toDayDateTimeString();
    }
    public function getCreatedAtAttribute($value)
    {
        return  Carbon\Carbon::parse($value)->format('Y-m-d');
    }

}
