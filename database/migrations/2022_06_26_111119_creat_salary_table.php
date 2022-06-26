<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('designation_id');
            $table->string('department_id');
            $table->double('basic');
            $table->double('da');
            $table->double('ta');
            $table->double('hra');
            $table->double('pf');
            $table->double('ha');
            $table->double('gross_salary');

            $table->double('net_salary');

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
        Schema::dropIfExists('salary');
    }
}
