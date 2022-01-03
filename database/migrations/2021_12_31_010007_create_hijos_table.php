<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('genero')->nullable();
            $table->text('alergias')->nullable();
            $table->text('prohibiciones')->nullable();
            $table->text('actividades')->nullable();
            $table->text('comments')->nullable();

            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

            
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
        Schema::dropIfExists('hijos');
    }
}
