<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  public function Offer()
  {
    return $this->belongsTo('App\Offer');
  }


  public function Details()
  {
      return $this->belongsToMany('App\Details','package_details','package_id','detail_id')->withPivot('type');
  }
}
