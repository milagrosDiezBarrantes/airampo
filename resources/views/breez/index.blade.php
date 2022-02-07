<!DOCTYPE html>
<html lang="en">

    <head>

        @include('breez.parts.head')

        @include('svg.css')

    </head>
    
    <body style="color: #ffff">
    
        <!-- ***** Preloader Start ***** -->
            @include('breez.sections.preloader')
        <!-- ***** Preloader End ***** -->
        
        
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            @include('breez.parts.header2')
        </header>
        <!-- ***** Header Area End ***** -->
        
        <!-- ***** Search Area ***** -->
        {{-- @include('breez.sections.search') --}}

        
        
        {{-- --------------contenido------------------contenido----------------------  --}}
        
        {{-- <div class="main-banner header-text" id="top">
            @include('breez.sections.slider')
        </div> --}}
        
        <!-- ***** Mapa Starts ***** -->
        <section class="section" id="about" >
            @include('breez.sections.map')
        </section>
        <div class="scroll-down scroll-to-section"><a href="#top"><i class="fa fa-arrow-down"></i></a></div>
        <!-- ***** Mapa Ends ***** -->
        
        <!-- ***** Main Banner Area Start ***** -->
        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                         
                        <div class="subscribe-content">
                            <h4 style="color: #2a416c; text-align: center;">
                                Somos un desarrollo inmobiliario a orillas del Dique Cabra Corral, que ofrece un estilo de vida único. La combinación del paisaje, campo, agua y tranquilidad, lo convierten en el lugar ideal para aquellas personas que sepan encontrarle sentido a la vida a través de sus pasiones.
                                <br>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="main-banner header-text" id="top">
            @include('breez.sections.video_yt_banner')
        </div>
        <div class="scroll-down scroll-to-section"><a href="#contact-us"><i class="fa fa-arrow-down"></i></a></div>
        
        <!-- ***** Main Banner Area End ***** -->
        

        <!-- ***** Features Big Item End ***** -->

        <!-- ***** Contact Us Area Starts ***** -->
        <section class="section" id="contact-us">
            @include('breez.sections.contact')
        </section>
        <!-- ***** Contact Us Area Ends ***** -->
        
        {{-- --------------/contenido------------------/contenido----------------------  --}}

        
        
        <!-- ***** Footer Start ***** -->
        <footer>
            @include('breez.parts.futer_biz')
        </footer>

        @include('breez.parts.subfooter')
        

        {{-- scripts --}}
        @include('breez.parts.scripts')


        @include('svg.script')

        <script>

            $(function() {
                var selectedClass = "";
                $("p").click(function(){
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
                }, 500);
                    
                });
            });

        </script>

    </body>
</html>