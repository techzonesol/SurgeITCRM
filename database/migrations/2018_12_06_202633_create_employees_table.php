<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->integer('employee_user_id');
            $table->string('employee_status',55)->nullable();
            $table->timestamp('employee_job_start_date')->nullable();
            $table->timestamp('employee_job_end_date')->nullable();
            $table->string('employee_work_phone',55)->nullable();
            $table->string('employee_work_ext',25)->nullable();
            $table->string('employee_work_email',90)->nullable();
            $table->string('employee_fax',55)->nullable();
            $table->integer('employee_designation_id')->nullable();
            $table->integer('employee_works_under_id')->nullable();
            $table->string('employee_works_under_mod',90)->nullable();
            $table->string('employee_created_by',55)->nullable();
            $table->string('employee_modified_by',55)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('employees');
    }
}
