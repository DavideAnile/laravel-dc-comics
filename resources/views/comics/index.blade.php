@extends('layouts/app')

@section ('content')
<main>

    <div class="content container">

        <div class="series">Current series</div>   
        @foreach($comics as $singleComic)

    
        <div class="card-container">

        <div class="thumb-container">
            <img src= "{{$singleComic['thumb']}}" alt="Immagine thumb">
        </div>
        <div class="cardTitle"> {{ $singleComic['title'] }} </div>

        
        <button class="btn btn-secondary details"><a href="{{route('comics.show', $singleComic->id)}}">MOSTRA DETTAGLI</a></button>
    </div>
        @endforeach

    </div>
    
    <div class="container"><button class="btn btn-primary add-comic"><a href="{{route('comics.create')}}">Aggiungi un fumetto</a></div></button>
    

</main>
@endsection
    



@section ('blue_section')
<div class="blue-section">

    
        <div class="my-container container">
            @foreach(config('helpCards') as $singleHelpCard)
            <div  class="link-container">
                <div class="img-container">
                    <img src="{{Vite::asset('/resources/img/' . $singleHelpCard['img'])}}" alt="non lo so">
                </div>
                <div>{{$singleHelpCard['title']}}</div>
            </div>
            @endforeach
                
        
    </div>
</div>
@endsection