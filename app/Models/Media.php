<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name', 'banner', 'slug', 'content', 'user_id', 'type_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(MediaType::class, 'type_id', 'id');
    }
    public function galleries() {
        return $this->hasMany(Gallery::class, 'media_id', 'id');
    }
}
