<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Products;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','products_id','like'
    ];

    public function products(){
        return $this->belongsTo(Products::class,'products_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
