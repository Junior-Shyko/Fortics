<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefrigerantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrigerants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand', 30)->nullable(false);
            $table->string('type', 25)->nullable(false);
            $table->string('flavor', 25)->nullable(false);
            $table->string('litrage', 15)->nullable(false);
            $table->float('value', 8,2)->nullable(false);
            $table->integer('stoke')->nullable(false);
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
        Schema::dropIfExists('refrigerants');
    }
}
