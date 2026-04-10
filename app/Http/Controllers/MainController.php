<?php

namespace App\Http\Controllers;

use App\Services\Boot;

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
        return view("home");
    }
}
