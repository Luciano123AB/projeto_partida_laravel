<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Services\Boot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->can("create", Note::class)) {
            $permissao = true;
        } else {
            $permissao = false;
        }
        
        return view("home")->with("permissao", $permissao);
    }
}