<?php

namespace App\Http\Controllers;

use App\Models\ComicsModel;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = ComicsModel::all();

        return view('ComicsModel.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ComicsModel.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //salvo dati in arrivo dal form
        $data = $request->all();
        //creo un modello Pasta
        $newComicsModel = new ComicsModel();

        //salvataggio in tabella
        $newComicsModel->fill($data);
        $newComicsModel->save();

        // return redirect()->route('pastas.show', $newPasta->id);
        return to_route('ComicsModel.show', $newComicsModel->id);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function show(ComicsModel $ComicsModel)
    {
        return view('pasta.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ComicsModel $ComicsModel)
    {
        return view('ComicsModel.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicsModel $ComicsModel)
    {
        $data = $request->all();

        $ComicsModel->update($data);

        //return redirect()->route('pastas.show', $pasta->id);
        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComicsModel $ComicsModel)
    {
        $ComicsModel->delete();
        return to_route('comics.index');
    }
}
