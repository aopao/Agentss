<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
	protected $fillable = [ 'city_id' , 'province_id' , 'college_name' , 'admit' , 'admit_desc' , 'scale' , 'genre_id' ];
}
