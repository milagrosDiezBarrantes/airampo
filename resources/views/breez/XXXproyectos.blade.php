<!DOCTYPE html>
<html lang="en">

    <head>

        @include('breez.parts.head')

        {{-- @include('svg.css') --}}

    </head>
    
    <body style="color: #ffff">
    
        <!-- ***** Preloader Start ***** -->
            @include('breez.sections.preloader')
        <!-- ***** Preloader End ***** -->
        
        
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            @include('breez.parts.header')
        </header>
        <!-- ***** Header Area End ***** -->
        
        <!-- ***** Search Area ***** -->
            @include('breez.sections.search')

        
        
        {{-- --------------contenido------------------contenido----------------------  --}}
        
        <section class="section" id="subscribe">
            @include('breez.sections.banner')
        </section>

        <!-- ***** About Area Starts ***** -->
        <section class="section" id="about" >
            {{-- @include('breez.orig.about') --}}
            @include('breez.sections.main_proyectos')
        </section>
        <!-- ***** About Area Ends ***** -->


        <!-- ***** Projects Area Starts ***** -->
        <section class="section" id="projects">
            @include('breez.sections.galeria')
        </section>
        <!-- ***** Projects Area Ends ***** -->

        {{-- --------------/contenido------------------/contenido----------------------  --}}

        
        
        <!-- ***** Footer Start ***** -->
        <footer>
            @include('breez.parts.footer')
        </footer>
        

        {{-- scripts --}}
        @include('breez.parts.scripts')


        {{-- @include('svg.script') --}}

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