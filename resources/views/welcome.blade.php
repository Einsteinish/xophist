@extends('layouts.master')

@section('content')
    <div class="main-container">
         <div class="row">
            <div class="col-sm-9">
               <h1>Beautiful places on our planet</h1>
               <p class="lead">Powered by Laravel</p>
            </div>

            <div class="col-sm-3">
                <div class="g-person" data-width="304" data-href="//plus.google.com/111664369941456137911" data-rel="author"></div>
                
                <!-- Place this tag after the last widget tag. -->
                <script type="text/javascript">
                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
            </div>
         </div>

         <hr>

         <div class="row">
            <div class="col-sm-12">
                <p>Yosemite Valley, US:</p>
                <img src="/images/BeautifulPlaces/10/Yosemite-Valley-US-4.jpg" width="90%">
                <br><br>
                <p>Isle of Sky, Scotland:</p>
                <img src="/images/BeautifulPlaces/4/Isle-of-Skye-Scotland-2.jpg" width="90%">
                <br><br>
                <p>Alesund, Norway:</p>
                <img src="/images/BeautifulPlaces/1/Alesund-Norway.jpg" width="90%">
                <br><br>
                <p><a href="/view-1-A" role="button" class="btn btn-default">View more »</a></p>
                <hr>
                <br><br>
                <br><br>
                <p><b>With Milky Way and Andromeda Galaxies</b></p>
                <p>Milky Way seen from above:</p>  
                <img src="/images/BeautifulPlaces/Milky-Way-From-Above.jpg" width="90%">
                <br>
                <br>
                <p>Note that out Solar System is inside the disk of the Milky Way, and orbits in one of the spiral arms at 26,000 light years from the center of the galaxy. </p>
                <p>Note also that we can't see the spiral structure of the galaxy from our planet since we are inside the disk and have no means of taking images from above or below the galaxy. The Milky Way's structural Images are created from computer modeling based on information from stars as they orbit the galaxy.</p>
                <p>Of the 5,000 to 8,000 stars in the Milky Way visible to the human eye from Earth, one can usually only see about 2,500 at a time. Actually, the few thousand stars we can see of the Milky Way with our naked eye are only about 0.000003% of the 200-400 billion stars that inhabit the spiral.</p>
                <br>
                <br>
                <p>Milky Way seen from Maraine Lake, Canada:</p>  
                <img src="/images/BeautifulPlaces/11/Milkyway-Moraine-Lake-Canada-1.jpg" width="90%">
                <br><br>
                <p>Milky Way seen from Dolomites, Italy:</p>  
                <img src="/images/BeautifulPlaces/15/Milkyway-Lavaredo-Dolomites-Italy-1.jpg" width="90%">
                <br><br>
                <p>In the following pictures, we can see not only Milky Way but also Andromeda galaxies. We may also see Magellanic Clouds from Southern hemisphere.</p>
                <p><a href="/view-2-L" role="button" class="btn btn-default">View more »</a></p>
            </div>
            <!--
            <div class="col-sm-3">
            </div>
            -->
        </div>
    </div>
@stop
