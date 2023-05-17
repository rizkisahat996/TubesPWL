<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
 
    protected $guarded = ['id'];

    // public function scopeFilter($query, array $filters)
    // {

    //     $query->when($filters['search'] ?? false, function($query, $search){
    //         return $query->where('title', 'like', '%' . $search . '%')
    //                     ->orWhere('body', 'like', '%' . $search . '%');
    //     });
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
