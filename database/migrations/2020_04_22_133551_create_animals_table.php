<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название животного');
            $table->tinyInteger('family_id')->comment('Id Семейства');
            $table->string('nickname')->comment('Кличка');
            $table->string('photo')->comment('Фото');
            $table->timestamps();

            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
