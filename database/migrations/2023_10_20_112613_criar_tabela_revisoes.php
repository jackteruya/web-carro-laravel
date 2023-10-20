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
        Schema::create('revisaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('veiculo_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->dateTime('data_revisao');
            $table->boolean('ativo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisaos');
    }
};
