<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nameProd');
            $table->string('Mark');
            $table->string('id_magasin');
            $table->string('Caractiristique');
            $table->string('ImageFileName1');
            $table->string('ImageFileName2');
            $table->string('ImageFileName3');
            $table->string('ImageFileName4');
            $table->string('ImageFileName5');
            $table->integer('Qte_stock');
            $table->integer('Qte_vt');
            $table->double('prix_ht');
            $table->double('promo');
            $table->double('prix_old');
            $table->double('prix_new');
            $table->string('Descirption');
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
        Schema::dropIfExists('produits');
    }
}
