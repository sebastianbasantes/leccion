<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'integrantes' => 'required|integer',
            'fecha_creacion' => 'required|date',
            'lider' => 'required|string|max:50',
        ]);

        Equipo::create($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo creado exitosamente.');
    }

    public function show($id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        return view('equipos.show', compact('equipo'));
    }

    public function edit($id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, $id_equipo)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'integrantes' => 'required|integer',
            'fecha_creacion' => 'required|date',
            'lider' => 'required|string|max:50',
        ]);

        $equipo = Equipo::find($id_equipo);
        $equipo->update($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo actualizado exitosamente.');
    }

    public function destroy($id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        $equipo->delete();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo eliminado exitosamente.');
    }
}
