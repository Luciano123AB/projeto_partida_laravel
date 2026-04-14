<?php

namespace App\Http\Controllers;

use App\Services\Boot;
use App\Models\Nota;

class MainController extends Controller
{
    public function index() {
        if (Boot::testarConexao() == false) {
            Boot::criarPovoarBanco();
        }

        if (!is_dir(base_path("node_modules"))) {
            Boot::dependencias();
        }

        return view("index");
    }

    public function home() {
        if (Auth::user()->can("create", Nota::class)) {
            echo "O usuário pode criar!";
        } else {
            echo "O usuário não pode criar!";
        }
        
        return view("home");
    }
}
