<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
 

class People extends Model{
	public $timestamps = false;
	protected $table = "peoples";
	protected $fillable = ['username', 'birthday', 'name', 'email', 'age', 'group_id'];
}
