@extends ('layouts/app')

@section ('content')
<main>


    <a href="{{route('comics.index')}}">VAI ALLA PAGINA INDEX CON TUTTI I FUMETTI</a>

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