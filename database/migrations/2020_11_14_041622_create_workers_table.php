<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('work_name')->nullable();
            $table->string('work_ape_paterno')->nullable();
            $table->string('work_ape_materno')->nullable();
            $table->date('work_fecha_nacimiento')->nullable();
            $table->string('work_doc_identidad')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->string('work_celular')->nullable();
            $table->string('work_correo')->nullable();
            $table->string('work_direccion')->nullable();


            $table
                ->foreign('job_id')
                ->references('id')
                ->on('jobs');

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
        Schema::dropIfExists('workers');
    }
}
