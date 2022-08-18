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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string('date');
            $table-> string('title');
            $table-> mediumText('p1');
            $table-> mediumText('p2');
            $table-> mediumText('p3');
            $table-> mediumText('p4');
            $table-> mediumText('p5');
            $table->string('img_banner');
            $table->string('img_banner');
            $table->string('img_banner');
            $table->string('img_banner');
            $table->string('img_banner');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
