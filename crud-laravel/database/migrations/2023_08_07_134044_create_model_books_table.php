<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
            $table->integer('pages');
            $table->double('price',10,2);

            // Chave Estrangeiras
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade'); // Dois métodos que altera e apaga em conjunto o registro.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
