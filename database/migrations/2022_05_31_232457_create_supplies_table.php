<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('supplier')->nullable();
            $table->integer('quantity');
            $table->float('weight');
            $table->string('value')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('supplies');
    }
};
