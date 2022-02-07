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
        
        <!-- ***** Contact Us Area Starts ***** -->
        <section class="section" id="contact-us">
            {{-- @include('breez.sections.contact') --}}
            @include('breez.sections.contact_biz')
        </section>
        <!-- ***** Contact Us Area Ends ***** -->
        

        {{-- --------------/contenido------------------/contenido----------------------  --}}

        
        
        <!-- ***** Footer Start ***** -->
        <footer>
            {{-- @include('breez.parts.footer') --}}
            @include('breez.parts.futer_biz')
        </footer>

        @include('breez.parts.subfooter')
        

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