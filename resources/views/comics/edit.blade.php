@extends('layouts/app')

@section('content')
<div class="container d-flex flex-column  ">
    <h1>MODIFICA FUMETTO : {{$comic->title}}</h1>
    
    <form class="mb-3" action="{{route('comics.update' , $comic->id)}}" method="POST">
    
    @csrf

    @method('PUT')

        <div class="mb-3">
            <label for="title">Titolo Fumetto</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
    
        <div class="mb-3">
            <label for="description">Descrizione Fumetto</label>
            <textarea class="form-control" name="description" id="description">{{$comic->description}}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="thumb">Link immagine Fumetto</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
        </div>
    
        <div class="mb-3">
            <label for="price">Prezzo Fumetto</label>
            <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
        </div>
    
        <div class="mb-3">
            <label for="series">Serie Fumetto</label>
            <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
        </div>
    
        <div class="mb-3">
            <label for="sale_date">Data Rilascio</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
        </div>
    
        <div class="mb-3">
            <label for="type">Tipo Fumetto</label>
            <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
        </div>

        <div><button class="btn btn-primary" type="submit">Modifica Fumetto</button></div>
    
    
    </form>

</div>
    
@endsection


