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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('more_description');
            $table->longText('additional_infos')->nullable();
            $table->integer('stock');
            $table->integer('solde_price');
            $table->integer('regular_price');
            $table->json('image_urls');
            $table->string('brand')->nullable();
            $table->boolean('is_available')->default(false);
            $table->boolean('is_best_seller')->default(false);
            $table->boolean('is_new_arrival')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_special_offer')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
