<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Validator
// METODO 2 CON FUNZIONE A PARTE CON Validate::
use Illuminate\Support\Facades\Validator;

//Models
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

        return view('admin.comics.index', [
            'comics' => $comics,
            'linkFooter' => config('footerLink')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create', [
            'linkFooter' => config('footerLink')
        ]);
    }





    // METODO 2 CON FUNZIONE A PARTE CON Validate::
    private function validationData($data){
        $data['price_comic']= str_replace(',', '.', $data['price_comic']);
        $validator = Validator::make($data,[
            'title_comic' => 'required|min:2|max:255',
            'description_comic' => 'nullable',
            'url_comic' => 'max:255|url',
            'price_comic' => 'required|decimal:0,2|numeric|between:0,9999.99',
            'series_comic' => 'required|min:2|max:60',
            'sale_date_comic' => 'required|date',
            'type_comic' => 'required|min:2|max:30',
        ],[
            // 'title_comic.required' => 'Il Titolo è OBBLIGATORIO!!!'
        ])->validate();
        return $validator;
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // METODO 1 VALISAZIONE DIRETTA QUI
            // $request->validate([
            //     'title_comic' => 'required|min:2|max:255',
            //     // 'description_comic' => 'required',
            //     'url_comic' => 'max:255|url',
            //     'price_comic' => 'required|decimal:2|numeric',
            //     'series_comic' => 'required|min:2|max:60',
            //     'sale_date_comic' => 'required|date',
            //     'type_comic' => 'required|min:2|max:30',
            // ]);
            // $data = $request->all();

        // METODO 2 CON FUNZIONE A PARTE CON Validate::
        $data = $this->validationData($request->all());

        $newComic = new Comic;
        $newComic->title = $data['title_comic'];
        $newComic->description = $data['description_comic'];
        $newComic->url = $data['url_comic'];
        $newComic->price = $data['price_comic'];
        $newComic->series = $data['series_comic'];
        $newComic->sale_date = $data['sale_date_comic'];
        $newComic->type = $data['type_comic'];
        $newComic->save();


        return redirect()->route('comics.show', $newComic->id);
    }








    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findorFail($id);

        return view('admin.comics.show', [
            'comic' => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findorFail($id);

        return view('admin.comics.edit', [
            'comic' => $comic
        ]);
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
        $comic = Comic::findOrFail($id);

        // METODO 1 VALISAZIONE DIRETTA QUI
            // $request->validate([
            //     'title_comic' => 'required|min:2|max:255',
            //     // 'description_comic' => 'required',
            //     'url_comic' => 'max:255|url',
            //     'price_comic' => 'required|decimal:2|numeric',
            //     'series_comic' => 'required|min:2|max:60',
            //     'sale_date_comic' => 'required|date',
            //     'type_comic' => 'required|min:2|max:30',
            // ]);
            // $data = $request->all();

        // METODO 2 CON FUNZIONE A PARTE CON Validate::
        $data = $this->validationData($request->all());

        $comic->title = $data['title_comic'];
        $comic->description = $data['description_comic'];
        $comic->url = $data['url_comic'];
        $comic->price = $data['price_comic'];
        $comic->series = $data['series_comic'];
        $comic->sale_date = $data['sale_date_comic'];
        $comic->type = $data['type_comic'];

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findorFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
