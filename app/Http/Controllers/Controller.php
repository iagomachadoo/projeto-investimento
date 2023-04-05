<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('welcome');
    }

    public function cadastro()
    {
        echo "Tela de cadastro";
    }

    public function login()
    {
        echo "Tela de login";
    }
}
