<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    //
    protected $fillable=['comments','animal_id','status'];
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
