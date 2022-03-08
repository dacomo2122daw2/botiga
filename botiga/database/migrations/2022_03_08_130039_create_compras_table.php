<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->string('dni',9);
            $table->foreign('dni')->references('dni')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('idprod',5);
            $table->foreign('idprod')->references('idprod')->on('productes')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['dni','idprod']);
            $table->date('data');
            $table->integer('quantitat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
