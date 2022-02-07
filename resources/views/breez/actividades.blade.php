<!DOCTYPE html>
<html lang="en">

    <head>

        @include('breez.parts.head')

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
        
        
        
        <section class="section" id="testimonials" style="margin-top: 00px;">
            @include('breez.sections.actividades_content')
        </section>

        <section class="section" id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/SEkV4X_YklU" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; 
                                autoplay; 
                                clipboard-write; 
                                encrypted-media;
                                gyroscope; 
                                picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>



        <section class="section" id="features" >
            {{-- style="background-color: #ffff" --}}
            @include('breez.sections.features')
        </section>



        <!-- ***** Projects Area Starts ***** -->
        {{-- <section class="section" id="projects" style=" background-color: #ffff; color: #2a416c;">
            @include('breez.sections.galeria')
        </section> --}}
        <!-- ***** Projects Area Ends ***** -->

        {{-- --------------/contenido------------------/contenido----------------------  --}}

        
        
        <!-- ***** Footer Start ***** -->
        <footer>
            @include('breez.parts.futer_biz')
        </footer>

        @include('breez.parts.subfooter')
        

        {{-- scripts --}}
        @include('breez.parts.scripts')


        {{-- @include('svg.script') --}}

        {{-- <script>

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

        </script> --}}

    </body>
</html>