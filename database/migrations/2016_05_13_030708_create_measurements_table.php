<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('attendant_name')->nullable(true);
            $table->string('station_name')->nullable(true);
            $table->string('station_flag')->nullable(true);
            $table->string('station_cep')->nullable(true);
            $table->string('station_address')->nullable(true);
            $table->string('station_district')->nullable(true);
            $table->string('station_city')->nullable(true);
            $table->string('station_state')->nullable(true);
            $table->double('sample_volume')->nullable(true);
            $table->double('sample_result')->nullable(true);
            $table->text('proceedings')->nullable(true);
            $table->text('observation')->nullable(true);
            
            $table->boolean('active')->default(true);
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
        Schema::drop('measurements');
    }
}
