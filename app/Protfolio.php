<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protfolio extends Model
{
      protected $fillable = ['title','description','subject','image','link'];
}
