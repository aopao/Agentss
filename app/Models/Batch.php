<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
	protected $fillable = [ 'provinces_id' , 'year_id' , 'college_id' , 'name' , 'stream' , 'planNumber' , 'lowest' , 'lowRank' , 'lowLine' , 'desc' ];
}
