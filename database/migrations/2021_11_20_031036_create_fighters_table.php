<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFightersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total')->default(0);
            $table->integer('win')->default(0);
            $table->integer('ko_win')->default(0);
            $table->integer('sub_win')->default(0);
            $table->integer('dec_win')->default(0);
            $table->integer('other_win')->default(0);
            $table->integer('lose')->default(0);
            $table->integer('ko_lose')->default(0);
            $table->integer('sub_lose')->default(0);
            $table->integer('dec_lose')->default(0);
            $table->integer('other_lose')->default(0);
            $table->integer('draw')->default(0);
            $table->integer('no_contest')->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('fighters');
    }
}
