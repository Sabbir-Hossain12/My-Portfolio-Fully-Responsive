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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->text('portfolio_image');
            $table->string('portfolio_title');
            $table->text('portfolio_short_desc')->nullable();
            $table->text('portfolio_long_desc')->nullable();
            $table->string('portfolio_link');
            $table->string('portfolio_btn_text');
            $table->integer('sequence')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
