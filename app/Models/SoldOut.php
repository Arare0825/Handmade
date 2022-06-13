<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SoldOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','bought_user','secondary_category_id','title','detail','price','image1','image2','image3','image4','image5',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
