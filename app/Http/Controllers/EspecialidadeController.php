<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;

class EspecialidadeController extends Controller
{
    public function index()
    {

        $especialidades = Especialidade::all();

        return Inertia::render('Especialidade', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'especialidades' => $especialidades,
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $especialidade = Especialidade::create($validated);

        return response()->json($especialidade, 200);
    }

    public function destroy($id)
    {
        $especialidade = Especialidade::find($id);

        if (!$especialidade) {
            return response()->json(['error' => 'Especialidade não encontrada'], 404);
        }

        $especialidade->delete();

        return response()->json(['success' => 'Especialidade excluída com sucesso'], 200);
    }
}
