<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_station', function (Blueprint $table) {
            $table->id('id');
            $table->string('locality');
            $table->string('address');
            $table->integer('postal_code');
            $table->string('rotulo');
            $table->string('working_hours');
            $table->string('lat');
            $table->string('long');
            $table->string('biodiesel');
            $table->string('bioetanol');
            $table->string('liquefied_natural_gas');
            $table->string('compressed_natural_gas');
            $table->string('liquefied_petroleum_gases');
            $table->string('diesel_oil_a');
            $table->string('diesel_oil_b');
            $table->string('diesel_oil_premium');
            $table->string('gas_95_e10');
            $table->string('gas_95_e5');
            $table->string('gas_95_e5_premium');
            $table->string('gas_98_e10');
            $table->string('gas_98_e5');
            $table->string('hydrogen');

            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id')->references('id')->on('municipality');

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
        Schema::dropIfExists('fuel_station');
    }
};
