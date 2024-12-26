<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;

class EspecialidadeController extends Controller
{
    public function index (){

        $especialidades = Especialidade::all();

        return Inertia::render('Especialidade', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'especialidades' => $especialidades,
        ]);
    }
    public function store (Request $request){

        dd($request);
        $especialidades = Especialidade::all();

        return Inertia::render('Especialidade', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'especialidades' => $especialidades,
        ]);
    }
}
