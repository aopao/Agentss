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
		Schema::create('users' , function(Blueprint $table) {
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('phone')->nullable()->unique();
			$table->string('password');
			$table->string('email')->nullable();
			$table->integer('qq')->nullable();
			$table->smallInteger('status')->default(1);
			$table->smallInteger('is_manage')->default(0)->comment('是否是管理员');
			$table->string('regist_ip')->nullable();
			$table->string('avatar')->nullable();
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
