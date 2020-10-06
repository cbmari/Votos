<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teste;


class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testes = Teste::all();

        return view('index', compact('testes'));
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
        $validatedData = $request->validate([
            'nome' => 'required|max:255', 
            'vinculo' => 'required|max:255',
            'endereco' => 'required|max:255',
            'whatsapp' => 'required|numeric',          
            'apoio' => 'required',
            
        ]);
        $show = Teste::create($validatedData);
   
        return redirect('/testes')->with('success', 'Dados foram salvos!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testes = Teste::findOrFail($id);

        return view('edit', compact('testes'));
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
        $validatedData = $request->validate([
            'nome' => 'required|max:255', 
            'vinculo' => 'required|max:255',
            'endereco' => 'required|max:255',
            'whatsapp' => 'required|numeric',          
            'apoio' => 'required',]);

        Teste::whereId($id)->update($validatedData);

        return redirect('/testes')->with('success', 'Dados atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testes = Teste::findOrFail($id);
        $testes->delete();

        return redirect('/testes')->with('success', 'Cadastro excluído com sucesso!');
    }
}
