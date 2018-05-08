<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types' , function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('desc')->nullable();
			$table->smallInteger('open')->default(1)->comment('是否开启使用|1:开启|0:未开启');
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
		Schema::dropIfExists('plan_types');
	}
}
