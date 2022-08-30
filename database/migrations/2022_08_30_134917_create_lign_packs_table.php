<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lign_packs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pack');
            $table->integer('id_prod');
            $table->integer('type');
            $table->integer('size');
            $table->integer('Qte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lign_packs');
    }
}
