<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beats', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('user_id');
            $table->string('title');
            $table->string('file');
            $table->decimal('price');
            $table->string('image')->nullable();
            $table->integer('album_id')->nullable();
            $table->integer('play_count')->nullable();
            $table->integer('purchase_count')->nullable();
            $table->string('description')->nullable();
            $table->string('tags')->nullable();
            $table->string('genre')->nullable();
            $table->string('visibility')->default('public');
            $table->string('instruments')->nullable();
            $table->string('key')->nullable();
            $table->string('tempo')->nullable();
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
        Schema::dropIfExists('beats');
    }
}
