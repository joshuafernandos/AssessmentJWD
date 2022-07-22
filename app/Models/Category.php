<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Order(){
        return $this->hasMany(Order::class);
    }
    
    public function User(){
        return $this->hasMany(User::class);
    }

}
