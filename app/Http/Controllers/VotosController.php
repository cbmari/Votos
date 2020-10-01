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
        $data = Votos::all();
        $columns = DB::getSchemaBuilder()->getColumnListing("votos");
        return view("index", compact("data", "columns"));
        
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
            'sobrenome' => 'required|max:255',
            'vinculo' => 'required|max:255',
            'segmento' => 'required|',          
            'whatsapp' => 'required|numeric',
            'rua' => 'required',
            'num' => 'required|numeric',
            'bairro' => 'required|max:255',
            'apoio' => 'required|max:255',
        ]);
        $show = Votos::create($validatedData);
   
        return redirect('')->with('success', 'Dados foram salvos!');
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
                $cadastros = Votos::findOrFail($id);
        
                return view('edit', compact('cadastros'));
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
            'sobrenome' => 'required|max:255',
            'vinculo' => 'required|max:255',
            'segmento' => 'required|',          
            'whatsapp' => 'required|numeric',
            'rua' => 'required|numeric',
            'num' => 'required|numeric',
            'bairro' => 'required|max:255',
            'apoio' => 'required|max:255',
        ]);
        $show = Votos::update($validatedData);
   
        return redirect('')->with('success', 'Dados foram atualizados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cadastro = Votos::findOrFail($id);
        $cadastro->delete();

        return redirect('/coronas')->with('success', 'Cadastro foi excluido');
    }
}
