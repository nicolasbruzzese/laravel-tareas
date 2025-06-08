<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        return view('tareas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        Tarea::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('tareas.index')
                         ->with('success', 'Tarea creada correctamente.');
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index')
                         ->with('success', 'Tarea eliminada correctamente.');
    }

    public function update(Request $request, Tarea $tarea)
    {
        $tarea->completada = true;
        $tarea->save();

        return redirect()->route('tareas.index')
                         ->with('success', 'Tarea marcada como completada.');
    }
}
