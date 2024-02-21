<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // CREO LA NUOVA ISTANZA PER COMICS PER SALVARLO NEL DATABASE
        $comic = new Comic();
        
        $form_comics = $request->all();

        // RECUPERO I DATI TRAMITE IL FILL
        $comic->fill($form_comics);

        // SALVO I DATI
        $comic->save();

        // FACCIO IL REDIRECT ALLA PAGINA SHOW 
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // RECUPERO IL COMIC CHE VOGLIO MODIFICARE
        $comic = Comic::find($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
        // RECUPERO IL COMIC CHE VOGLIO MODIFICARE
        $comic = Comic::find($id);

        $form_comics = $request->all();

        // SALVO I DATI
        $comic->update($form_comics);

        // FACCIO IL REDIRECT ALLA PAGINA SHOW 
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //RECUPERARE IL COMIC CANCELLATO
        $comic = Comic::find($id);

        // CANCELLO IL COMIC CON IL METODO
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
