<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Products;
use App\Models\Comment;
use App\Models\Mypage;
use App\Models\Like;
use App\Models\soldOut;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function likeItems(){

        return $this->belongsToMany(Like::class,'products_id');
    }


    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function UserProducts()
    {
        return $this
        ->find(Auth()->id())
        ->Products()
        ->get();
    }

    public function Mypage(){

        return $this->hasOne(Mypage::class);
    }

    public function like(){
        return $this->hasMany(Like::class);
    }

public function SoldOut(){
    return $this->hasMany(SoldOut::class);
}
}
