<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('model');
            $table->integer('category_id');
            $table->string('description');
            $table->integer('price');
            $table->integer('worktime');
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
        Schema::dropIfExists('servicies');
    }
}
