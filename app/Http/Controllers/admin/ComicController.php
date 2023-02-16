<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

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
        $count = Comic::count();
        return view('admin.comics.index', compact('comics', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Comic $comic)
    {
        return view('admin.comics.create', ['comic' => new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $table->string('title', 100);
        // $table->text('description');
        // $table->text('img_path');
        // $table->float('price');
        // $table->string('series', 50);
        // $table->date('sale_date');
        // $table->string('type', 30);


        $request->validate([
            'title' => 'required|min:3|max:100|string',
            'description' => 'required|min:10',
            'img_path' => 'required|url|min:10',
            'price' => 'required|decimal:2|',
            'series' => 'required|min:3|max:50|string',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|min:3|max:30|string',
        ],
        [
            'title.required' => 'Inserisci il titolo del fumetto.',
            'title.min' => 'Il titolo è troppo breve.',
            'title.max' => 'Il titolo è troppo lungo.',
            'description.required' => 'Inserisci la descrizione del fumetto.',
            'description.min' => 'La descrizione è troppo corta.',
            'img_path.required' => 'Inserisci l\'url della copertina.',
            'img_path.url' => 'Url troppo corto o non valido.',
            'img_path.min' => 'Url troppo corto o non valido.',
            'price.required' => 'Inserisci il prezzo.',
            'price.decimal' => 'Deve avere due cifre decimali',
            'series.required' => 'Inserisci la serie del fumetto.',
            'series.min' => 'La serie è troppo corta.',
            'series.max' => 'La serie è troppo lunga.',
            'sale_date.required' => 'Inserisci la data di pubblicazione.',
            'sale_date.date_format' => 'Inserisci un data in formato YYYY-MM-DD.',
            'type.required' => 'Inserisci il tipo di fumetto.',
            'type.min' => 'Il tipo è troppo corto.',
            'type.max' => 'Il tipo è troppo lungo.',
        ]);


        $data = $request->all();
        // E' possibile inserire i dati a mano come fatto in precedenza nel seeder, altrimenti tramite la funzione fill per poi andare a gestire i campi del Model. RICORDARSI il redirect nella singola risorsa passandoli ovviamente l'id
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('admin.comics.show', $newComic->id)->with('info-message', "$newComic->title was successfully created!")->with('alert', 'primary');
    }

    /**
     * Display the specified resource.
     *
     * @param Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic) 
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('admin.comics.show', $comic->id)->with('info-message', "$comic->title has been edited successfully!")->with('alert', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index')->with('info-message', "The comic $comic->title as been delected!")->with('alert', 'danger');
    }
}
