<?php

namespace App\Http\Controllers\Admin;

use App\Models\ComicsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = ComicsModel::all();

        return view('comics.index', compact('comics'));
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
        $newComicsModel = new ComicsModel();

        //salvataggio in tabella
        $newComicsModel->fill($data);
        $newComicsModel->save();

        //return to_route('ComicsModel.show', $newComicsModel->id);;
        return redirect()->route('comics.show', $newComicsModel->id);

        $validatedData = $request->validate([
            'ComicsName' => 'required|max:50',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function show(ComicsModel $ComicsModel)
    {
        return view('ComicsModel.show', compact('ComicsModel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComicsModel  $comicsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ComicsModel $ComicsModel)
    {
        return view('ComicsModel.edit', compact('ComicsModel'));
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

        return redirect()->route('comics.index', $ComicsModel->id);
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
        return redirect()->route('comics.index');
    }

    public function rules()
    {
        return [
            'ComicsName' => 'required|max:50',
        ];
    }
}
