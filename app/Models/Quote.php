<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'dot_number', 
        'user_id', 
        'premium_amount',
        'premium_tax',
        'premium_total',
        'street',
        'city',
        'state',
        'zipcode',
        'driver1_name',
        'driver1_age',
        'driver2_name',
        'driver2_age',
        'driver3_name',
        'driver3_age',
        'driver4_name',
        'driver4_age',
        'driver5_name',
        'driver5_age'];

        // a quote belongs to a user
        public function user(){
            return $this->belongsTo(User::class);
        }

        //prevent the user from modifying other users' post
        public function isTheOwner($user)
        {
          return $this->user_id === $user->id;
        }
}
