<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Like;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','title','detail','price','image1','image2','image3','image4','image5',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Comments(){
        
        return $this->hasMany(Comment::class);
    }
    public function Like(){
        return $this->hasMany(Like::class);
    }


}
