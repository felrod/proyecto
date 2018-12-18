<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

protected $table='status';
protected $guarded = [];

public function products(){
  return $this->hasMany(Product::class);
}
}
