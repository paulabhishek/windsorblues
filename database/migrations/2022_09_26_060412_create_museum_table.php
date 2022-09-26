<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('museum', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('artist_name');
            $table->string('image1');
            $table->string('image2');
            $table->string('video_url2');
            $table->string('video_url1');
            $table->date('date');
            $table->mediumText('p1');
            $table->mediumText('p2');
            $table->mediumText('p3');
            $table->bigInteger('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('museum');
    }
};
