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
        Schema::create('machines', function (Blueprint $table) {
            $table->id()->primary();
            $table->char('processeur',100);
            $table->integer('memoire');
            $table->char('systeme_exploitation',50);
            $table->date('purchase_date');
            $table->text('install_games')->nullable();
            $table->enum('status',['disponible','en maintenance']);
            $table->datetime('last_maintenances');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
