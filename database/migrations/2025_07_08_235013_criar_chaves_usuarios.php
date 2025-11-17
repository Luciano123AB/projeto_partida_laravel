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
        Schema::table("players", function (Blueprint $table) {
            $table->unsignedBigInteger("id_notas")->nullable()->after("id");
            $table->foreign("id_notas")->references("id")->on("personagens")->comment("1|2|3");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
