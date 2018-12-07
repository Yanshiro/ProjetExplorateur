<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santes', function (Blueprint $table) {
            $table->increments('id');
            $table->double("pulsationCardiaque", 3, 2);
            $table->double("poind", 3, 2);
            $table->double("temperature", 2, 2);
            $table->datetime("heureDeSommeil");
            $table->integer("tension");
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
        Schema::dropIfExists('santes');
    }
}
