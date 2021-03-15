<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Redirect;

class UsuarioController extends Controller
{
    

    public function index()
    {

        $Usuarios = Usuarios::all();
        return view('lista', ['Usuarios' => $Usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Databases = $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required|max:255',
            'data' => 'required|max:255',
            'telefone' => 'required|max:255',
            'senha' => 'required|max:255',
        ]);
        $usuarios = Usuarios::create($Databases);

        return redirect('/')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Usuarios::findOrFail($id);
        return view('edit', compact('Usuarios'));

        $usuarios = Usuarios::findOrFail( $id );
        return view('lista', ['Usuarios' => $usuarios]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarios = Usuarios::findOrFail( $id );
        $usuarios->update( $request->all() );
        return redirect('/')->with('completed', 'Student has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::findOrFail( $id );
        $usuarios->delete();
        return redirect('/')->with('completed', 'Student has been saved!');
    }
}
