<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
			$table->increments('id');
			$table->string('number');
			$table->integer('student_id');
			$table->integer('type_id')->default(0)->comment('0:没有分类则无效');
			$table->string('name');
			$table->string('producer')->default(0)->comment('0:未知制作人');
			$table->smallInteger('status')->default(0)->comment('0:暂存,1:保存');
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
        Schema::dropIfExists('plans');
    }
}
