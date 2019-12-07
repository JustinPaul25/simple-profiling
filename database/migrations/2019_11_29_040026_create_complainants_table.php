<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complainants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('settlement_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('settlement_id')->references('id')->on('settlements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complainants');
    }
}
