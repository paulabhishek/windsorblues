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
        Schema::table('news', function (Blueprint $table) {
            $table->string('img_banner')->nullable()->change();
            $table->string('img_highlight1')->nullable()->change();
            $table->string('img_highlight2')->nullable()->change();
            $table->string('img_highlight3')->nullable()->change();
            $table->string('img_highlight4')->nullable()->change();
            $table->string('img_highlight5')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            //
        });
    }
};
