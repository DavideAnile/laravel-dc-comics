<nav>
    <div class="up-nav">
        
        <div class="up-nav-inner container">
            <div>DC POWERED BY VISA</div>
            <div>ADDITIONAL DC SITES</div>
        </div>
    </div>
    <div class="my-container container">
        <div class="img-container">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <ul>
            @foreach(config('links') as $singleLink)
                <li><a href="">{{$singleLink}}</a></li>
            @endforeach
            
        </ul>
        <div class="input-container">
            <input type="text" placeholder="Cerca">
        </div>
    </div>
    <div class="jumbo-container">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="Jumbotron image">
        
    </div>

    
    
</nav>
    
        
        