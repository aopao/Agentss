<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus' , function(Blueprint $table) {
			$table->increments('id');
			$table->string('icon')->unllable();
			$table->string('name');
			$table->string('url')->unllable()->comment('连接外部 URL');
			$table->string('path_url')->unllable()->comment('组装好的 URL');
			$table->string('model')->unllable();
			$table->string('controller')->unllable();
			$table->string('action')->unllable();
			$table->string('is_agent')->defalut(0);
			$table->string('path')->unllable();
			$table->integer('parent_id')->defalut(0);
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
		Schema::dropIfExists('menus');
	}
}
