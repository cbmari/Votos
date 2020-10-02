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
        $votos = Votos::latest()->paginate(5);

        return view('votos.index', compact('votos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('votos.create');
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

        return redirect()->route('votos.index')
            ->with('success', 'Cadastro efetuado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function show(Votos $voto)
    {
        return view('votos.show', compact('votos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function edit(Votos $voto)
    {
        return view('votos.edit', compact('votos'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Votos $voto)
    {
        $request->validate([
            'name' => 'required',
            'vinculo' => 'required',
            'whatsapp' => 'required',
            'endereço' => 'required',
            'apoio' => 'required'
        ]);

        $voto->update($request->all());

        return redirect()->route('votos.index')
            ->with('success', 'Cadastro atualizado com sucesso');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votos  $voto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votos $voto)
    {
        $voto->delete();

        return redirect()->route('voto.index')
            ->with('success', 'Cadastro excuido com sucesso.');
    }
}
