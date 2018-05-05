<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->comment('哪个用户创建的');
			$table->string('name')->unique();
			$table->string('sex')->default(0)->comment('0:女1:男');
			$table->string('age')->default(0);
			$table->string('nation')->default(0)->comment('0:汉族1:其他');
			$table->string('province');
			$table->string('city')->nullable();
			$table->string('area')->nullable();
			$table->string('contact')->nullable()->comment('联系人');
			$table->string('mobile')->nullable();
			$table->integer('card')->nullable()->comment('身份证');
			$table->smallInteger('admitted')->default(0)->comment('文理科0:文科1:理科');
			$table->string('school')->nullable()->comment('所在学校');
			$table->string('branchs')->default(0)->comment('高考估分');
			$table->string('seats')->nullable()->comment('预估名次');
			$table->string('score')->nullable()->comment('语/数/外');
			$table->string('gkscore')->nullable()->comment('高考分数');
			$table->integer('rank')->nullable()->comment('省排名');
			$table->string('simulate1_score')->nullable()->comment('一模成绩');
			$table->string('simulate1_rank')->nullable()->comment('一模排名');
			$table->string('simulate2_score')->nullable()->comment('二模成绩');
			$table->string('simulate2_rank')->nullable()->comment('二模排名');
			$table->string('simulate3_score')->nullable()->comment('三模成绩');
			$table->string('simulate3_rank')->nullable()->comment('三模排名');
			$table->string('major_sort')->nullable()->comment('意向院校专业');
			$table->string('school_sort')->nullable()->comment('意向院校地区');
			$table->smallInteger('select1')->default(0)->comment('是否考虑军校、公安院校0:否1:考虑');
			$table->smallInteger('select2')->default(0)->comment('是否考虑免费师范生0:否1:考虑');
			$table->smallInteger('select3')->default(0)->comment('是否考虑中外合作办学0:否1:考虑');
			$table->smallInteger('select4')->default(0)->comment('是否考虑定向、民族预科班0:否1:考虑');
			$table->smallInteger('select5')->default(0)->comment('是否考虑院校分校0:否1:考虑');
			$table->string('medical_note')->nullable()->comment('体检备注');
			$table->string('other_note')->nullable()->comment('其它备注');
			$table->string('active_date')->nullable()->comment('注册激活日期');
			$table->string('endtime')->nullable()->comment('授权查询截至日期');
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
        Schema::dropIfExists('students');
    }
}
