<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('prod_id');
            $table->unsignedBigInteger('nam_id');
            $table->unsignedBigInteger('meas_id');
            $table->unsignedBigInteger('damp_id');
            $table->unsignedBigInteger('mat_id');
            $table->string('prod_stock');

            $table
                ->foreign('nam_id')
                ->references('nam_id')
                ->on('name_products');

            $table
                ->foreign('meas_id')
                ->references('meas_id')
                ->on('measure_products');

            $table
                ->foreign('damp_id')
                ->references('damp_id')
                ->on('damper_products');
            $table
                ->foreign('mat_id')
                ->references('mat_id')
                ->on('material_products');



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
        Schema::dropIfExists('products');
    }
}
