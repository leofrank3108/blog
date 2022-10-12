<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\User;

class Post extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'iframe'
    ];

      /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function getGetExcertpAttribute()
    {
        return substr($this->body, 0, 140);
    }
}
