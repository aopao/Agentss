<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admits', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('college_id');
			$table->integer('province_id');
			$table->integer('major_id')->comment('专业id');
			$table->integer('year_id');
			$table->string('batch');
			$table->string('stream')->default(0)->comment('0:文科1:理科');
			$table->integer('﻿planNumber')->default(0);
			$table->integer('﻿lowest')->default(0);
			$table->integer('﻿lowRank')->default(0);
			$table->integer('﻿lowLine')->default(0);
			$table->integer('average')->default(0);
			$table->integer('averageRank')->default(0);
			$table->integer('averageLine')->default(0);
			$table->string('advantage')->unllable();
			$table->string('explain')->unllable();
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
        Schema::dropIfExists('admits');
    }
}
