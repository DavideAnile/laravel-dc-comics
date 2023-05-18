@extends ('layouts/app')

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
    
        </div>
        @endforeach

    <div class="btn"><button>LOAD MORE</button></div>
    </div>

    <a href="{{route('comics.index')}}">VAI ALLA PAGINA INDEX CON TUTTI I FUMETTI</a>

</main>
@endsection
    



@section ('blue_section')
<div class="blue-section">

    
        <div class="my-container container">
            @foreach($helpCards as $singleHelpCard)
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