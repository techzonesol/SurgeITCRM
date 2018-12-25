<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name',55)->nullable();
            $table->string('company_email',90)->nullable();
            $table->string('company_phone_no',55)->nullable();
            $table->string('company_phone_no_ext',55)->nullable();
            $table->string('company_title',90)->nullable();
            $table->string('company_state',55)->nullable();
            $table->string('company_zip_code',55)->nullable();
            $table->string('company_street_address')->nullable();
            $table->string('company_billing_city',55)->nullable();
            $table->string('company_fax',55)->nullable();
            $table->string('company_other_phone_no',55)->nullable();
            $table->string('company_website',255)->nullable();
            $table->string('company_country',55)->nullable();
            $table->string('company_billing_country',55)->nullable();
            $table->string('company_billing_zip_code',55)->nullable();
            $table->string('company_billing_state',55)->nullable();
            $table->string('company_billing_street_address',255)->nullable();
            $table->string('company_industry_id',55)->nullable();
            $table->boolean('company_is_active')->default(true);
            $table->integer('company_created_by')->nullable();
            $table->integer('company_modified_by')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
