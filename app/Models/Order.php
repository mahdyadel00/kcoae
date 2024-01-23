<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['client_id','high_school_certificate','social_security','good_conduct_certificate','passport','national_ID','birth_certificate','status'];

    public function client(){
       return $this->belongsTo(Client::class);
    }
}
