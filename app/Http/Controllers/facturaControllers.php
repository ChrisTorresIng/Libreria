<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factura;
use Illuminate\Pagination\Paginator;

class facturaControllers extends Controller
{
    public function index()
    {
        $items = factura::leftJoin('books', 'facturas.id_book', '=', 'books.id')
        -> leftJoin('users', 'facturas.id_user', '=', 'users.id') 
        -> select('facturas.*', 'books.title as title','books.costo as costo', 'facturas.created_at as date_buy', 'facturas.id as id', 'users.nombre as nombre', 'users.cedula as cedula')
        -> paginate(5);
        return view('modules/empleado/registroVentas', compact('items'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(factura $factura)
    {
        //
    }

    public function edit(factura $factura)
    {
       //
    }

    public function update(Request $request, factura $factura)
    {
       //
    }

    public function destroy(String $factura)
    {
        $item = factura::find($factura);
        $item->delete();
        return redirect()->route('facturas.index')->with('success', 'Se elimino satisfactoriamente.');
    }
}
