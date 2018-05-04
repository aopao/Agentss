<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauths' , function(Blueprint $table) {
			$table->increments('id');
			$table->string('platform');
			$table->string('app_id');
			$table->string('app_secret');
			$table->string('url')->nullable();
			$table->string('callback_url');
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
		Schema::dropIfExists('oauths');
	}
}
