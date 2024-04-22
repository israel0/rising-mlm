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
        Schema::create('wallets', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->timestamps();
            $table->string('userName');            
            $table->double('matrixBonus')->default(0);
            $table->double('stepOutBonus')->default(0);
            $table->double('stageBonus')->default(0);
            $table->double('groupBonus')->default(0);
            $table->double('referralBonus')->default(0);            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
