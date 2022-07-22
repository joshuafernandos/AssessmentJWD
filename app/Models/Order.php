<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
