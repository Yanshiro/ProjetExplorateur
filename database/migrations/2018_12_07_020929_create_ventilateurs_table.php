<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentilateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventilateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->double("temperateureVentilateur");
            $table->timestamps();
            $table->foreign('id')
                ->references('id')->on('intruments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventilateurs');
    }
}
