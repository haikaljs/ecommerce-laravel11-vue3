<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['name', 'discount', 'valid_until'];

    // Cover coupon name to uppercase
   public function getNameAttribute($value){
    return $this->attributes['name'] = Str::upper($value);
   }
    // Check the coupon if not expired
   public function checkIfValid(){
    
    if($this->valid_until > Carbon::now()){
        return true;
    }else{
        return false;
    }
   }
}
