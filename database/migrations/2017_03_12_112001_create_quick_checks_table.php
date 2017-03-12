<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuickChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quick_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('street');
            $table->string('house_number');
            $table->string('zip');
            $table->string('town');
            $table->string('type');
            $table->string('year');
            $table->string('living_area');
            $table->string('plot_area');
            $table->boolean('garages');
            $table->boolean('elevator');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quick_checks');
    }
}
