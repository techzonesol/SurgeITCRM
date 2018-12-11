<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('contact_id');
            $table->string('contact_f_name',55)->nullable();
            $table->string('contact_l_name',55)->nullable();
            $table->string('contact_work_email',90);
            $table->integer('contact_company_id')->nullable();
            $table->string('contact_office_phone',55)->nullable();
            $table->string('contact_fax',55)->nullable();
            $table->string('contact_office_phone_ext',55)->nullable();
            $table->string('contact_city',55)->nullable();
            $table->string('contact_state',55)->nullable();
            $table->string('contact_zip_code',55)->nullable();
            $table->string('contact_country',55)->nullable();
            $table->string('contact_street_address')->nullable();
            $table->integer('contact_assigned_to_id')->nullable();
            $table->boolean('contact_is_active',55)->default(true);
            $table->boolean('contact_is_deleted',55)->default(false);
            $table->string('contact_created_by',55)->nullable();
            $table->string('contact_modified_by',55)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
