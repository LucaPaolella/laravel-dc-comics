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
        $records = ComicsModel::all(); // Otteniamo tutti i record dal modello

        return view('nome_vista.index', ['records' => $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nome_vista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validazione dei dati inviati dal form
        $validatedData = $request->validate([]);

        // Creazione di un nuovo record nel database
        $record = ComicsModel::create($validatedData);

        // Reindirizzamento alla pagina di visualizzazione del nuovo record
        return redirect()->route('nome_modello.show', ['id' => $record->id]);

        $validatedData = $request->validate([
            //

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function show(ComicsModel $comicsModel)
    {
        $record = ComicsModel::find($id);

        return view('nome_vista.show', ['record' => $record]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ComicsModel $comicsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicsModel $comicsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComicsModel $comicsModel)
    {
        //
    }
}
