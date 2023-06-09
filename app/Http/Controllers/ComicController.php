<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //qua si visualizza la lista dei fumetti
        $comics = Comic::all();

       
       
        return view('comics/index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        
        $formData = $request->all();
        $this->validation($formData);

        $formData['price'] = '$' . number_format($formData['price'], 2);
        
        $newComic = new Comic();

        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->thumb = $formData['thumb'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)

    {
        
        return view('comics/show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        
        $formData = $request->all();
        
        $this->validation($formData);
        $comic->update($formData);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    private function validation($formData){

        $validator = Validator::make($formData, [

            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'nullable'

        ] , [

            'title.required' => 'Devi Inserire un titolo!',
            'title.max' => 'Il titolo può contenere un massimo di :max caratteri!',
            'price.required' => 'Devi inserire il prezzo!',
            'series.required' => 'Devi inserire il nome della serie!',
            'sale_date.required' => 'Inserisci la data di rilascio del fumetto!'

        ])->validate();

    }
}
