<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $items = Empleado::paginate(4);
        return view('modules/empleado/registroEmpleados', compact('items'));
    }

    public function create()
    {
        return view('modules/empleado/registroEmpleados-crear');
    }

    public function store(StoreEmpleadosRequest $request)
    {
        $empleado = Empleado::create($request->all());

        return redirect()->route('empleados.index')->with('success', 'El empleado registrado correctamente.');

    }

    public function show(Empleado $empleados)
    {
        //
    }

    public function edit(Empleado $empleado)
    {
        // $items = Empleado::find($empleados);
        return view('modules/empleado/registroEmpleados-edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|string|max:50|min:4',
            'correo' => "required|max:200|email|unique:empleados,correo,{$empleado->id}",
            'cedula' => "required|max:8|digits_between:6,8|unique:empleados,cedula,{$empleado->id}",
            'trabajo' => 'required',
        ]);

        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'El empleado ' . $empleado->nombre . ' editado correctamente.');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index')->with('success', 'El empleado ' . $empleado->nombre .' se eliminó correctamente.');
        
    }
}
