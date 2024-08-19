<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAdditionalInfosTable extends Migration
{
    public function up()
    {
        Schema::create('page_additional_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('key_type'); //image/text
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_additional_infos');
    }
}
