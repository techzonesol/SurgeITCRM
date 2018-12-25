<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('asset_id');
            $table->string('asset_no',55)->nullable();
            $table->string('asset_serial_no',55)->nullable();
            $table->string('asset_status_id',55)->nullable();
            $table->string('asset_product_type',55)->nullable();
            $table->string('asset_image')->nullable();
            $table->string('asset_in_service_date',55)->nullable();
            $table->string('asset_details',55)->nullable();
            $table->string('asset_name',55)->nullable();
            $table->string('asset_tag_number',55)->nullable();
            $table->string('asset_receiving_notes')->nullable();
            $table->integer('asset_contact_id')->nullable();
            $table->string('asset_product_architecture')->nullable();
            $table->string('asset_product_memory')->nullable();
            $table->string('asset_product_processor')->nullable();
            $table->string('asset_product_os')->nullable();
            $table->integer('asset_created_by')->nullable();
            $table->integer('asset_modified_by')->nullable();
            $table->timestamp('asset_date_sold')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
