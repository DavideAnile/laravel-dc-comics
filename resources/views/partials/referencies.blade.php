<div class="referencies">
    <div class="my-container container">
        <div class="right-container">

            <div class="list-container">
                @foreach($referencies as $singleReference)
                <div  class="link-container">
                    <ul>
                        <li class="links-title">{{$singleReference['title']}}</li>
                        @foreach($singleReference['links'] as $singleLink)
                        <li  class="links">{{$singleLink}}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                
            </div>
            <div class="credits ">
                <div>
                    All site content TM and <span class="blue">&copy</span> 2020 DC Entertainment, unless otherwise <span class="blue">noted here</span>. All rights reserved. <span class="blue">Cookies Settings</span>
                </div>

            </div>
        </div>
        <div class="big-logo-container">
            <img src="{{Vite::asset('/resources/img/dc-logo-bg.png')}}" alt="">
        </div>
    </div>

</div>