<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoPageTable extends Migration
{
    public function up()
    {
        Schema::create('seo_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description');
            $table->text('keywords');
            $table->timestamps();
            
            $table->foreign('slug')->references('slug')->on('pages')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seo_pages');
    }
}
