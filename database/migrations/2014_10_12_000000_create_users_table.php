<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_f_name',55)->nullable();
            $table->string('user_l_name',55)->nullable();
            $table->string('user_username',55)->nullable();
            $table->string('email',90);
            $table->string('password',90);
            $table->boolean('user_is_active')->default(true);
            $table->timestamp('user_last_modified_password')->nullable();
            $table->timestamp('user_modified_date')->nullable();
            $table->timestamp('user_dob')->nullable();
            $table->string('user_cell_no',55)->nullable();
            $table->string('user_home_phone',55)->nullable();
            $table->string('user_city',90)->nullable();
            $table->string('user_zip_code',20)->nullable();
            $table->string('user_state',55)->nullable();
            $table->string('user_country',55)->nullable();
            $table->string('user_street_address',55)->nullable();
            $table->string('user_security_group_id',55)->nullable();
            $table->string('user_home_url',55)->nullable();
            $table->string('user_created_by',55)->nullable();
            $table->string('user_modified_by',55)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
