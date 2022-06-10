<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrimaryCategory;
use App\Models\Products;

class SecondaryCategory extends Model
{
    use HasFactory;

    public function primary(){
        return $this->belongsTo(PrimaryCategory::class);
    }

    public function products(){
        return $this->hasMany(Products::class);
    }
}
