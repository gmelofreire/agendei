<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;



class ServicoController extends Controller
{
    public function index()
    {

        $servicos = Servico::with('especialidade')->get();

        return Inertia::render('ServicoVue', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'servicos' => $servicos,
        ]);
    }
}
