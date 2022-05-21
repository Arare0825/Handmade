<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','products_id','comment'
    ];


    public function Product(){

        return $this->hasOne(Products::class);
    }

}
