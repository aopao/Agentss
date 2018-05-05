<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
		'name','sex','province'
	];

	public function province()
	{
		return $this->belongsTo(Province::class);
    }
}
