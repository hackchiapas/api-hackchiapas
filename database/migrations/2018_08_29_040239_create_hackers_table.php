<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('genero',10);
            $table->integer('edad');
            $table->string('email');
            $table->string('telefono',20);
            $table->string('instituto');
            $table->string('estado',50);
            $table->string('ciudad',100);
            $table->string('talla_playera',20);
            $table->string('codigo_confirmacion');
            $table->boolean('confirmado');
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
        Schema::dropIfExists('hackers');
    }
}
