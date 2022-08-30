<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessoires', function (Blueprint $table) {
            $table->id();
            $table->integer('id_magasin');
            $table->string('nameProd');
            $table->string('description');
            $table->string('sex');
            $table->string('mark_prod');
            $table->string('prix_ht');
            $table->integer('promo');
            $table->double('prix_old');
            $table->double('prix_new');
            $table->integer('Qte_stock');
            $table->integer('Qte_vt');
            $table->string('image');
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
        Schema::dropIfExists('accessoires');
    }
}
