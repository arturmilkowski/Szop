<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('types', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('size_id')->constrained()->onDelete('cascade');
            $table->string('slug', 40)->index();
            $table->string('name', 40)->index();
            $table->decimal('price', 6, 2)->default(0);
            $table->decimal('promo_price', 6, 2)->default(0);
            $table->unsignedTinyInteger('quantity')->default(0);
            $table->boolean('active')->default(true);
            $table->text('description')->nullable();
            $table->string('img', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
