<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('colonna1', 10);
            $table->string('colonna2', 10);
            $table->string('colonna3', 10);
            $table->string('colonna4', 10);
            $table->string('colonna5', 10);
            $table->string('colonna6', 10);
            $table->string('colonna7', 10)->nullable();
            $table->float('colonna8', 10, 2);
            $table->tinyInteger('is_available')->default(1);
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
        Schema::dropIfExists('trains');
    }
}
