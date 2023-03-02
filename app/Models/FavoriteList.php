<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteList extends Model
{
    use HasFactory;

    public function FavoriteItem(){
        return $this->hasMany(FavoriteItem::class);
    }
}
