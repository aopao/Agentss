<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
		'name' , 'age' , 'sex' , 'province_id' , 'user_id'
	];

	public function province()
	{
		return $this->belongsTo(Province::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
