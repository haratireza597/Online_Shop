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
        Schema::create('shirt__poroducts', function (Blueprint $table) {
            $table->id();
            $table->string('Type_S')->nullable();
            $table->string('Name_S');
            $table->string('Color_S');
            $table->string('Material_S');
            $table->string('Price_S');
            $table->string('Season_S');
            $table->string('Stock_Levels_S');
            $table->string('Image_S')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shirt__poroducts');
    }
};
