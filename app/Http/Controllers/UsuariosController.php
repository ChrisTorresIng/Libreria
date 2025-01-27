<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
    public function index()
    {
        $items = User::paginate(5);
        return view('modules/empleado/registroUsuarios', compact('items'));
    }


    public function create()
    {
        return view('modules/empleado/registroUsuarios-crear');
    }


    public function store(StoreUsuarioRequest $request)
    {
        $items = new user();
        $items->nombre = $request->nombre;
        $items->correo = $request->correo;
        $items->cedula = $request->cedula;
        $items->password = Hash::make($request->clave);
        $items->save();
        return redirect()->route('usuarios.index')->with('success', 'El usuario ' . $items->nombre . ' se registro satisfactoriamente.');
    }


    public function show(User $usuario)
    {
        // $usuario = User::find($usuarios);
        return view('modules/empleado/registroUsuarios-show', compact('usuario'));
    }


    public function edit(User $usuario)
    {
        // $item = User::find($usuarios);
        return view('modules/empleado/registroUsuarios-edit', compact('usuario'));
    }


    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:50|min:4',
            'correo' =>  
            [
                'required',
                'email',
                'min:1',
                'max:200',
                Rule ::unique('users')->ignore($usuario->id), 
            ],
            'cedula' => "required|max:8|digits_between:6,8|unique:users,cedula,{$usuario->id}",
            'rol' => 'required',
        ]);
        
        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('success', 'El usuario '. $usuario->nombre .'se actualizo satisfactoriamente.');
    }


    public function destroy(String $usuarios)
    {
        $item = User::find($usuarios);
        $item->delete();
        return redirect()->route('usuarios.index')->with('success', 'El usuario '. $item->nombre .' se elimino satisfactoriamente.');
    }
}
