<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable =['year', 'institute','subject','grade','description'];
}
