<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $fillable = ['image','button_link','button_type'];

    public $translatedAttributes = ['title','description','button_name'];
}
