<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id_tabungan',
        'user_id',
        'name',
    ];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
