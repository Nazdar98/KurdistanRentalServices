<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->id();
            $table->string('house_name');
            $table->string('owner');
            $table->string('address');
            $table->string('city');
            $table->string('house_image');
            $table->integer('price_per_day');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('rental_availability');
            $table->string('description');
            $table->string('features');
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
        Schema::dropIfExists('rental');
    }
}
