<?php
namespace App\Http\Controllers;

use App\Models\Votos;
use Illuminate\Http\Request;

class VotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votos = Votos::all();
        return view('index', compact('votos'));
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
        $request->validate([
            'name' => 'required',
            'vinculo' => 'required',
            'whatsapp' => 'required',
            'endereço' => 'required',
            'apoio' => 'required'
        ]);

        Votos::create($request->all());

        return redirect()->route('index')
            ->with('success', 'Cadastro efetuado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function show(Votos $votos)
    {
        return view('show', compact('votos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function edit(Votos $votos)
    
    {
        $votos = Votos::findOrFail($id);

        return view('edit', compact('votos'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Votos $votos)
    {
        $request->validate([
            'name' => 'required',
            'vinculo' => 'required',
            'whatsapp' => 'required',
            'endereço' => 'required',
            'apoio' => 'required'
        ]);

        Votos::whereId($id)->update($validatedData);

        return redirect()->route('index')
            ->with('success', 'Cadastro atualizado com sucesso');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votos $votos)
    {
        
        $votos = Votos::findOrFail($id);
        $votos->delete();

        return redirect('/votos')->with('success', 'Cadastro excluido');
    }
}
