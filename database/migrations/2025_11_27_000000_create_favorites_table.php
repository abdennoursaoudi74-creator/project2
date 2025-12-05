<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produit_id');
            $table->timestamps();

            $table->unique(['user_id', 'produit_id']);
            // Avoid FK constraint here to prevent compatibility issues with existing users table
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorites');
    }
};
