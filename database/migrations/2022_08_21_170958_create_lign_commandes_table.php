<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lign_commandes', function (Blueprint $table) {
            $table->id();
            $table->string('id_cmd');
            $table->string('id_prod');
            $table->integer('qte_ht');
            $table->double('Total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lign_commandes');
    }
}
