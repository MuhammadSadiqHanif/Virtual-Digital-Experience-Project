<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('lottie_desktop')->nullable();
            $table->string('lottie_mobile')->nullable();
            $table->string('icon')->nullable();
            $table->string('position')->nullable();
            $table->string('domain')->nullable();
            $table->string('video_default')->nullable();
            $table->string('pdf_default')->nullable();
            $table->text('text_slider')->nullable();
            $table->string('chatbot_pic')->nullable();
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
        Schema::dropIfExists('topics');
    }
}
