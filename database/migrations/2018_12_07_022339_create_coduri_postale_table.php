<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoduriPostaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coduri_postale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judet', 255)->nullable();
            $table->string('localitate', 255)->nullable();
            $table->string('tip_artera', 255)->nullable();
            $table->string('denumire_artera', 255)->nullable();
            $table->string('numar_bloc', 255)->nullable();
            $table->string('cod_postal', 255)->nullable();
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coduri_postale');
    }
}
