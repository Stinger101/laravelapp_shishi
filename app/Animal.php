<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //
    protected $forbidden=['id'];
    protected $fillable=['name','type','location','tracker_id'];
    public function exchange()
    {
        return $this->hasMany(Checkup::class);
    }
}
