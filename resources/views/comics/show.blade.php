@extends('layouts/app')

@section('content')
<div class="bonus-section">
    <div class="banner">
        <div class="inner-banner container"><img src="{{$comic->thumb}}" alt=""></div>
    </div>
    <div class=" container ">
        <div class="up-section-info ">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
        </div>
        <div class="img-container">
            <img src="{{Vite::asset('/resources/img/dc-logo.png')}}" alt="">
        </div>
    </div>
    
    <div class="bottom-section">
        <div class="container">
            <div class="first">
                <h2>Talent</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur porro dolores, sit cumque, consequatur animi nemo dolorum, quo nihil ratione explicabo! Rerum quod sit est voluptatibus in et, accusamus voluptas.</p>
                <div>Art by : <span>COMICS</span></div>
                <div> Written by : <span>UNKNOW</span></div>
                
            </div>
            <div class="second">
                <h2>Specs</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, minima voluptas enim cupiditate, aut eum itaque et repellat voluptatibus impedit labore mollitia? Ex unde delectus a, veniam eius adipisci ab.</p>
                <div>Series : <span>BATGIRL</span></div>
                <div>U.S Price : 19.99$</div>
                
            </div>
        </div>
    </div>
</div>

<div class="container my-3 text-center"><a href="{{route('comics.index')}}">TORNA ALLA HOME DEI FUMETTI</a></div>
@endsection