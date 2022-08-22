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
            $table->integer('Volum35');
            $table->integer('Volum50');
            $table->integer('Volum100');
            $table->string('Caractiristique');
            $table->string('ImageFileName1');
            $table->string('ImageFileName2');
            $table->string('ImageFileName3');
            $table->string('ImageFileName4');
            $table->string('ImageFileName5');
            //35
            $table->integer('Qte_stock_35');
            $table->integer('Qte_vt_35');
            $table->double('prix_ht_35');
            $table->double('promo_35');
            $table->double('prix_old_35');
            $table->double('prix_new_35');
            //50
            $table->integer('Qte_stock_50');
            $table->integer('Qte_vt_50');
            $table->double('prix_ht_50');
            $table->double('promo_50');
            $table->double('prix_old_50');
            $table->double('prix_new_50');
            //100
            $table->integer('Qte_stock_100');
            $table->integer('Qte_vt_100');
            $table->double('prix_ht_100');
            $table->double('promo_100');
            $table->double('prix_old_100');
            $table->double('prix_new_100');
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
