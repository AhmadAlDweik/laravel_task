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
        Schema::create('likeables', function (Blueprint $table) {
                $table->unsignedBigInteger("replie_id");
                $table->integer("likeable_id");
                $table->string("likeable_type");
                $table->foreign("replie_id")->references("id")->on("replies")->cascadeOnDelete()->cascadeOnUpdate();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likeables');
    }
};
