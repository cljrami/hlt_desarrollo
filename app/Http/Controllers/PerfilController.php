<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('perfil', compact('user'));
    }
}
