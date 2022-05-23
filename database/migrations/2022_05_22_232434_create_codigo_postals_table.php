<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigoPostalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_postals', function (Blueprint $table) {
            $table->id();
            $table->integer('d_codigo');
            $table->string('d_asenta', 255)->nullable();
            $table->string('d_tipo_asenta', 150)->nullable();
            $table->string('d_mnpio', 255)->nullable();
            $table->string('d_estado', 255)->nullable();
            $table->string('d_ciudad', 255)->nullable();
            $table->integer('d_cp')->nullable();
            $table->integer('c_estado')->nullable();
            $table->integer('c_oficina')->nullable();
            $table->string('c_cp', 255)->nullable();
            $table->integer('c_tipo_asenta')->nullable();
            $table->integer('c_mnpio')->nullable();
            $table->integer('id_asenta_cpcons')->nullable();
            $table->string('d_zona', 255)->nullable();
            $table->integer('c_cve_ciudad')->nullable();
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
        Schema::dropIfExists('codigo_postals');
    }
}
