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
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->string("name", 80);
            $table->string("email", 100);
            $table->string("password", 255);
            $table->date("data_nascimento", 10);
            $table->longText("foto")->nullable()->comment("iVBORw0KGgo...");
            $table->boolean("permissao")->default(true)->comment("1 = Administrador | 0 = Usuário Comum");
            $table->dateTime("ultimo_acesso")->nullable();
            $table->timestamp("email_verified_at")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("users");
    }
};
