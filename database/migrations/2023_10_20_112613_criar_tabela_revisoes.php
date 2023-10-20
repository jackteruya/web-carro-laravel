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
        Schema::create('revisoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('veiculo_id')->constrained();
            $table->dateTime('data_revisao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisoes');
    }
};