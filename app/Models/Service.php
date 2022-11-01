<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function clicks(){
        return $this->hasMany(Offerurl::class);
    }
    public function postback(){
        return $this->hasMany(Subscription::class);
    }
}
