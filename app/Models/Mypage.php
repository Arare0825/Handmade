<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mypage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','name','image','message'
    ];

    public function User(){
        return $this->hasOne(User::class);
    }
}
