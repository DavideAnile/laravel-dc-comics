@extends('layouts/app')

@section('content')
<div class="container d-flex flex-column  ">
    <h1>MODIFICA FUMETTO : {{$comic->title}}</h1>
    
    <form class="mb-3" action="{{route('comics.update' , $comic->id)}}" method="POST">
    
    @csrf

    @method('PUT')

        <div class="mb-3">
            <label for="title">Titolo Fumetto</label>
            <input class="form-control @error ('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title') ?? $comic->title}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="description">Descrizione Fumetto</label>
            <textarea class="form-control @error ('description') is-invalid @enderror" name="description" id="description">{{old('description') ?? $comic->description}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="thumb">Link immagine Fumetto</label>
            <input class="form-control @error ('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" value="{{old('thumb') ?? $comic->thumb}}">
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="price">Prezzo Fumetto</label>
            <input class="form-control @error ('price') is-invalid @enderror" type="text" name="price" id="price" value="{{old('price') ?? $comic->price}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="series">Serie Fumetto</label>
            <input class="form-control @error ('series') is-invalid @enderror" type="text" name="series" id="series" value="{{old('series') ?? $comic->series}}">
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="sale_date">Data Rilascio</label>
            <input class="form-control @error ('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
            @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="type">Tipo Fumetto</label>
            <input class="form-control @error ('type') is-invalid @enderror" type="text" name="type" id="type" value="{{old('type') ?? $comic->type}}">
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div><button class="btn btn-primary" type="submit">Modifica Fumetto</button></div>
    
    
    </form>

</div>
    
@endsection


