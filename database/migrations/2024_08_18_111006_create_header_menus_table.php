<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('header_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_category_id')->unique(); // Add unique constraint here
            $table->string('isactive'); //show/hide
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_menus');
    }
};
