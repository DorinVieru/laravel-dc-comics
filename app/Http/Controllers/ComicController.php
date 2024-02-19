<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
    public function store(Request $request)
    {
        // RECUPERO I DATI INVIATI DAL FORM
        $form_comics = $request->all();

        // CREO LA NUOVA ISTANZA PER COMICS PER SALVARLO NEL DATABASE
        $NewComic = new Comic();
        $NewComic->title = $form_comics['title'];
        $NewComic->description = $form_comics['description'];
        $NewComic->thumb = $form_comics['thumb'];
        $NewComic->price = $form_comics['price'];
        $NewComic->series = $form_comics['series'];
        $NewComic->sale_date = $form_comics['sale_date'];
        $NewComic->type = $form_comics['type'];
        $NewComic->artists = $form_comics['artists'];
        $NewComic->writers = $form_comics['writers'];

        $NewComic->save();

        // FACCIO IL REDIRECT ALLA PAGINA SHOW 
        return redirect()->route('comics.show', ['comic' => $NewComic]);
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
    public function update(Request $request, $id)
    {
        // RECUPERO I DATI INVIATI DAL FORM
        $form_comics = $request->all();

        // RECUPERO IL COMIC CHE VOGLIO MODIFICARE
        $comic = Comic::find($id);

        // MODIFICO E SALVO I DATI
        $comic->title = $form_comics['title'];
        $comic->description = $form_comics['description'];
        $comic->thumb = $form_comics['thumb'];
        $comic->price = $form_comics['price'];
        $comic->series = $form_comics['series'];
        $comic->sale_date = $form_comics['sale_date'];
        $comic->type = $form_comics['type'];
        $comic->artists = $form_comics['artists'];
        $comic->writers = $form_comics['writers'];

        $comic->update();

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
        //
    }
}
