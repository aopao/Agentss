<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->increments('id');
			$table->string('﻿name');
			$table->integer('﻿provinces_id');
			$table->integer('genre_id')->unllable()->comment('科类|eg:工科类');
			$table->smallInteger('﻿or985')->unllable();
			$table->integer('city_id')->unllable();
			$table->text('﻿admit')->unllable();
			$table->text('﻿admit_info')->unllable();
			$table->text('﻿scale')->unllable();
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
        Schema::dropIfExists('colleges');
    }
}
