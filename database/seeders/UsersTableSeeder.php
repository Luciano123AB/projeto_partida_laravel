<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Usuário 01",
                "email" => "usuario01@gmail.com",
                "password" => bcrypt("senha123"),
                "data_nascimento" => "2000-01-01",
                "foto" => "iVBORw0KGg...",
                "permissao" => 1,
                "ultimo_acesso" => null,
                "id_nota" => 1,
                "email_verified_at" => now(),
                "created_at" => now()
            ]
        ]);
    }
}
