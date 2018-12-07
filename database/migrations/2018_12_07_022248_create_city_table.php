<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('county_id');
            $table->bigInteger('siruta');
            $table->decimal('longitude', 18, 16);
            $table->decimal('latitude', 18, 16);
            $table->string('name', 64);
            $table->string('region', 64);

            $table->index('county_id', 'account_city_3a0d0688');
            $table->index('name', 'account_city_52094d6e');
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
