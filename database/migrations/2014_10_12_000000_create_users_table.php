<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//{"success":true,"entity":{"id":19796,"nickname":"18105311511",
		//"email":"","emailIsavalible":0,"mobile":"18105311511","mobileIsavalible":0,
		//"password":"","isavalible":0,"customerkey":"",
		//"createdate":"2018-05-06 20:17:46",
		//"userip":"222.134.117.12","gender":0,
		//"userType":1,"weiBoNum":0,"fansNum":0,
		//"attentionNum":0,"msgNum":0,"sysMsgNum":0,
		//"lastSystemTime":"2018-05-06 20:18:11",
		//"lastLoginTime":"2018-05-07 13:41:53",
		//"unreadFansNum":0,"loginNum":7,"studyNum":26,
		//"noteNum":0,"assessNum":0,"answerNum":0,
		//"examNum":0,"showname":"18105311511",
		//"userInfo":"","cusId":19796,"commonFriendNum":0,
		//"friendId":0,"mutual":0,"cusNum":0,
		//"current":1525671712807,"registerFrom":
		//"registerFrom","userLongReqChanle":"2018-05-07#WEB"}}
		Schema::create('users' , function(Blueprint $table) {
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('nickname')->default('未分配');
			$table->string('phone')->nullable()->unique();
			$table->string('password');
			$table->string('avatar')->nullable();
			$table->string('email')->nullable();
			$table->integer('qq')->nullable();
			$table->smallInteger('status')->default(1);
			$table->smallInteger('is_manage')->default(0)->comment('是否是管理员');
			$table->string('regist_ip')->nullable();
			$table->string('verify_token')->nullable()->comment('邮箱验证 Token');
			$table->string('is_active')->default(0)->comment('邮箱是否已经验证');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
