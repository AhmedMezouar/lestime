<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volums', function (Blueprint $table) {
            $table->id();
            $table->integer('id_produit');
            $table->integer('volum');
            $table->integer('Qte_stock');
            $table->integer('Qte_vt');
            $table->double('prix_ht');
            $table->double('promo');
            $table->double('prix_old');
            $table->double('prix_new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volums');
    }
}
