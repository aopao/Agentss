<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plan
 * @package App\Models
 */
class Plan extends Model
{
	/**
	 * @var array
	 */
	protected $fillable = [ 'number' , 'type_id' , 'student_id' , 'name' , 'producer' , 'status' ];

	public function user()
	{
		return $this->belongsTo(User::class , 'producer');
	}

	public function student()
	{
		return $this->belongsTo(Student::class);
	}

	public function type()
	{
		return $this->belongsTo(Type::class , 'type_id');
	}
}
