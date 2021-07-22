<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliencommitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliencommits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('comen_id')->unsigned();
            $table->string('code');
            $table->string('note');
            $table->timestamps();

            $table->foreign('comen_id')->references('id')->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliencommits');
    }
}
