<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    public function connections()
    {
    	return $this->hasMany(Connection::class);
    }
}
