<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function Package()
  {
    return $this->hasMany('App\Package');
  }
}
