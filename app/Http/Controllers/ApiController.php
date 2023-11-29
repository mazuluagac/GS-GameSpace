<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();
        return view('api', compact('usuariosArray'));
    }
}
