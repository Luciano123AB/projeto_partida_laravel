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
            $table->id()->autoIncrement()->comment("1");
            $table->string("name", 80)->nullable()->comment("...");
            $table->string("email", 100)->nullable()->comment("usuario@gmail.com");
            $table->timestamp('email_verified_at')->nullable()->comment("0000-00-00 00:00:00");
            $table->string("password", 255)->nullable()->comment("...");
            $table->date("data_nascimento", 10)->nullable()->comment("0000-00-00");
            $table->longText("foto", 13980320)->comment("...");
            $table->integer("permissao")->default(1)->comment("1 = Administrador | 0 = Usuário Comum");
            $table->dateTime("ultimo_acesso")->nullable()->comment("0000-00-00 00:00:00");
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
