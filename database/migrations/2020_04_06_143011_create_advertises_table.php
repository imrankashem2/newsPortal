<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('linkTitle')->nullable();
            $table->string('link')->nullable();
            $table->string('hAd')->nullable();
            $table->string('sideAd')->nullable();
            $table->string('singleTopAd')->nullable();
            $table->string('singleBottomAd')->nullable();
            $table->longText('description')->nullable();
            $table->string('imgLink')->nullable();
            $table->text('img')->nullable();
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
        Schema::dropIfExists('advertises');
    }
}
