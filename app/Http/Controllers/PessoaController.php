<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;

class PessoaController extends Controller
{
    public function index ()
    {
        $pessoas = \App\Pessoa::all();

        return view ('pessoa.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoa.create');
    }

    public function store(Request $request)
    {
        // $pessoa = new \App\Pessoa();

        // $pessoa->nome = $request->nome;
        // $pessoa->telefone = $request->telefone;
        // $pessoa->email = $request->email;

        // $pessoa->save();

        Pessoa::create($request->all());

        return redirect('/pessoas');

    }

    public function edit(Pessoa $pessoa)
    {
        return view('pessoa.create' , compact('pessoa'));
    }
    
    public function update(Request $request, Pessoa $pessoa)
    {
        $pessoa->update($request->all());

        return redirect('/pessoas');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();

        return redirect('/pessoas');
    }

}
