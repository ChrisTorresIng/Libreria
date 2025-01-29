<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LogearUserRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreatedMail;

class Users extends Controller
{
    public function index()
    {
        return view('modules/users/index');
    }

    public function create()
    {
        return view('modules/users/registro');
    }

    public function home()
    {
        return view('modules/cliente/home');
    }

    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->nombre = $request->nombre;
        $user->cedula = $request->cedula;
        $user->correo = $request->correo;
        $user->password = Hash::make($request->clave);
        $user->save();
        return redirect()->route('users.index')->with('success', 'El usuario '. $user->nombre. ' se registro exitosamente. ya puede Iniciar sesión!');
    }

    public function logear(LogearUserRequest $request, User $usuario)
    {   
        $identidad = [
            'correo' => $request->correo,
            'password' => $request->clave,
        ];

        $usuario = User::where('correo', $request->correo)->first();
        
        if(Auth::attempt($identidad)){

            return redirect()->route('users.home')->with('success', 'Inicio de Sesión exitosa, Bienvenido! '. $usuario->nombre);
        }else {
            return redirect()->route('users.index')->with('error', 'Error, Datos incorrectos');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('users.index')->with('success', 'Sesión finalizada exitosamente');
    }

    public function olvido()
    {
        return view('modules/users/olvidoClave');
    }

    public function recuperar(Request $request, User $usuario){
        $usuario = User::where('correo', $request->correo)->first(); 
        Mail::to($request->correo)->send( new UserCreatedMail ($usuario));
        return redirect()->route('users.olvido')->with('success', 'Estimado usuario '. $usuario->nombre.', su solicitud se ha enviado al correo ingresado.');
    
    }

    public function enviarNuevaClave(User $usuario)
    {
        return view('modules/users/cambiarClave', compact('usuario'));
    }

    public function cambiarNuevaClave(Request $request, User $usuario)
    {
        $request->validate([
            'password' => 'required|string|max:100|min:5',
            'password_confirmation' => 'required|string|max:100|min:5',
        ]);

        $usuario->update($request->all());
        return redirect()->route('users.index')->with('success', 'El usuario ' . $usuario->nombre . ' cambio la contraseña correctamente.');
    }

    public function perfil()
    {
        $user = Auth::User();
        auth()->user();
        return view('modules/cliente/usuario-perfil', compact('user'));
    }

    public function read(){
        $facturas = factura::leftJoin('books', 'facturas.id_book', '=', 'books.id')
        // ->leftJoin('users', 'facturas.id_user', '=', 'users.id')
        ->where('facturas.id_user', Auth::id())
        ->select('facturas.*', 'books.title as title','books.autor as autor', 'facturas.created_at as date_buy' )
        ->get();
        return view('modules/cliente/libro-comprados', compact('facturas'));
    }

    public function readBooks(Book $book){
        $books = Book::find($book);
        return view('modules/cliente/libro-leer', compact('books'));
    }

}
