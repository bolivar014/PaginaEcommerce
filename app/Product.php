<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Product extends Model
{
    //
    
    public function product()
    {
        return $this->hasMany(User::class);
    }
}
