<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Connection extends Model {

	public function suplier() {
		return $this->belongsTo(Suplier::class);
	}

    public function CreateConnection() {
    	Schema::connection('mysql2')->create('some_table', function($table) {
		    $table->increments('id');
		});
    }
}
