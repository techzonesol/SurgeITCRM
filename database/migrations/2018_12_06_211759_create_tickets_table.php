<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->bigInteger('ticket_assigned_to_id')->nullable();
            $table->bigInteger('ticket_company_id')->nullable();
            $table->bigInteger('ticket_contact_id')->nullable();
            $table->string('ticket_details',500)->nullable();
            $table->bigInteger('ticket_category_id')->nullable();
            $table->string('ticket_subject',500)->nullable();
            $table->string('ticket_priority',500)->nullable();
            $table->string('ticket_status_id',500)->nullable();
            $table->string('ticket_sub_category_id')->nullable();
            $table->bigInteger('ticket_asset_id')->nullable();
            $table->string('ticket_created_by_id',500)->nullable();
            $table->bigInteger('ticket_modified_by_id')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
