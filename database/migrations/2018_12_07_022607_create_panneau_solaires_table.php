<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanneauSolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panneau_solaires', function (Blueprint $table) {
            $table->increments('id');
            $table->double("etatPanneauSolaire");
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
        Schema::dropIfExists('panneau_solaires');
    }
}
