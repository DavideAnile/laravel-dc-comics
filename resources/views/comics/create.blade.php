@extends('layouts/app')

@section('content')
<div class="container d-flex flex-column  ">
    <h1>Aggiunta di un nuovo fumetto</h1>

    
    
    <form class="mb-3" action="{{route('comics.store')}}" method="POST">
    
    @csrf
        <div class="mb-3">
            <label for="title">Titolo Fumetto</label>
            <input class="form-control @error ('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror


            
        </div>
    
        <div class="mb-3">
            <label for="description">Descrizione Fumetto</label>
            <textarea class="form-control @error ('description') is-invalid @enderror" name="description" id="description">{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="thumb">Link immagine Fumetto</label>
            <input class="form-control @error ('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" value="{{old('thumb')}}">
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="price">Prezzo Fumetto</label>
            <input class="form-control @error ('price') is-invalid @enderror" type="text" name="price" id="price" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="series">Serie Fumetto</label>
            <input class="form-control @error ('series') is-invalid @enderror" type="text" name="series" id="series" value="{{old('series')}}">
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="sale_date">Data Rilascio</label>
            <input class="form-control @error ('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="type">Tipo Fumetto</label>
            <input class="form-control @error ('type') is-invalid @enderror" type="text" name="type" id="type" value="{{old('type')}}">
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div><button class="btn btn-primary" type="submit">Salva Fumetto</button></div>
    
    
    </form>

</div>
    
@endsection


