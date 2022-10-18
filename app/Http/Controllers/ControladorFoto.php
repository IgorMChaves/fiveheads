<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Foto;
use Illuminate\Http\Request;

class ControladorFoto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $foto = Foto::all();
        return view('admin/home-admin', compact('foto'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexmais()
    {   
        
        $foto = Foto::all();
        return view('mostrarmais', compact('foto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foto = Foto::all();
        return view('admin/formulario', compact('foto'));       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Foto $foto)
    {
            $foto = new Foto();
            
            $foto->nomeObra = $request->get('nomeObra');
            $foto->data = $request->get('data');
            $foto->duracao = $request->get('duracao');
            $foto->sinopse = $request->get('sinopse');
            $foto->elenco = $request->get('elenco');
            $foto->producao = $request->get('producao');
            $path = $request->file('arquivo')->store('imagens', 'public');
            $foto->arquivo = $path;

            $foto->save();
            return redirect('/filmes');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemais(Request $request, Foto $foto)
    {
            $foto = new Foto();
            
            $foto->nomeObra = $request->get('nomeObra');
            $foto->data = $request->get('data');
            $foto->duracao = $request->get('duracao');
            $foto->sinopse = $request->get('sinopse');
            $foto->elenco = $request->get('elenco');
            $foto->producao = $request->get('producao');
            $path = $request->file('arquivo')->store('imagens', 'public');
            $foto->arquivo = $path;

            $foto->save();
            return redirect('/mostrarmais');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        return view('/obra', compact('foto'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        return view('admin/edit', compact('foto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foto $foto)
    {
        $validated = $request->validate([
            'nomeObra' => 'required|max:255',
            'data' => 'required|max:255',
            'duracao' => 'required|max:255',
            'sinopse' => 'required|max:255',
            'elenco' => 'required|max:255',
            'producao' => 'required|max:255',
            'arquivo' => 'image'
        ]);
        if ($validated) {
            $foto->nomeObra = $request->get('nomeObra');
            $foto->data = $request->get('data');
            $foto->duracao = $request->get('duracao');
            $foto->sinopse = $request->get('sinopse');
            $foto->elenco = $request->get('elenco');
            $foto->producao = $request->get('producao');
            $path = $request->file('arquivo')->store('imagens', 'public');
            $foto->arquivo = $path;


            $foto->save();
            return redirect('/admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {

        $foto->delete();
        return redirect("/filmes");
    }
}
