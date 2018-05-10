<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateSettingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings' , function(Blueprint $table) {
			$table->increments('id');
			$table->string('key');
			$table->string('value')->nullable();
			$table->string('desc')->nullable();
			$table->timestamps();
		});
		$data = [
			['key'=>'web_name','value'=>'黑马高考'],
			['key'=>'copyright','value'=>'黑马高考版权'],
			['key'=>'login_message','value'=>'黑马高考登录界面信息'],
		];
		DB::table('settings')->insert($data);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
