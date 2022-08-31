<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $comics = Comic::all();
            $data = [
                'comics' => $comics
            ];
            return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Faccio la validazione dei dati richiamando il metodo con le specifiche impostate
        $request->validate($this->getValidationRules());


        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic'=> $new_comic->id]);
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
        $comic = Comic::findOrFail($id);

        $data =[
            'comic'=>$comic,
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data =[
            'comic'=>$comic,
        ];
        return view('comics.edit', $data);
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
        // Faccio la validazione dei dati richiamando il metodo con le specifiche impostate
        $request->validate($this->getValidationRules());


        $form_data = $request->all();

        $comic_to_update = Comic::findOrFail($id);
        $comic_to_update->update($form_data);

        return redirect()->route('comics.show', ['comic'=> $comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();

        return redirect()->route('comics.index');
    }
    // Metodo che contiene la funzione con tutti i parametri per la validazione dei form
    protected function getValidationRules() {
        return [
            'src' => 'required|max:60000',
            'title' => 'required|max:50',
            'type' => 'required|max:30',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'price'=> 'required',
            'description' => 'max:60000'
        ];
    }
}
