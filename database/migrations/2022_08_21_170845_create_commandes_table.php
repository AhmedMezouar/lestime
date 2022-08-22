<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_magasin');
            $table->string('ClientName');
            $table->double('Clientstate');
            $table->string('ClientTelephone');
            $table->string('ClientHomeAddress');
            $table->string('ClientCommune');
            $table->integer('EtatCommand');
            $table->integer('Typelaivr');
            $table->double('netapayer');
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
        Schema::dropIfExists('commandes');
    }
}
