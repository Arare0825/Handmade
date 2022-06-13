<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\User;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','products_id','comment','users_id','name',
    ];


    public function Product(){

        return $this->hasOne(Products::class);
    }

    public function User()
    {
        return $this->hasOne(User::class,'id');
    }
}
