<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('﻿provinces_id');
            $table->integer('year_id');
			$table->integer('﻿college_id');
			$table->string('name');
			$table->string('﻿stream')->default(0)->comment('文理科0文1理');
			$table->integer('﻿planNumber')->default(0);
			$table->integer('﻿lowest')->default(0);
			$table->integer('﻿lowRank')->default(0);
			$table->integer('﻿lowLine')->default(0);
			$table->string('﻿desc')->unllable();

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
        Schema::dropIfExists('batches');
    }
}
