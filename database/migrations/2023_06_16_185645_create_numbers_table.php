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
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('num1')->nullable()->default(0);
            $table->bigInteger('num2')->nullable()->default(0);
            $table->bigInteger('num3')->nullable()->default(0);
            $table->bigInteger('num4')->nullable()->default(0);
            $table->bigInteger('num5')->nullable()->default(0);
            $table->bigInteger('num6')->nullable()->default(0);
            $table->bigInteger('num7')->nullable()->default(0);
            $table->bigInteger('num8')->nullable()->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numbers');
    }
};
