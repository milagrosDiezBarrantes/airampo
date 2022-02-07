<!DOCTYPE html>
<html lang="en">

    <head>

        @include('breez.parts.head')

    </head>
    
    <style>
        body {
            background: #fff;
        }
    </style>
    <body style="color: #2a416c">
    
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
        <!-- ***** Search Area End ***** -->

        
        
        {{-- --------------contenido------------------contenido----------------------  --}}


        <!-- ***** GRID ***** -->
        <section class="section" id="projects">
            @include('breez.sections.grid3')
        </section>
        <!-- ***** /GRID ***** -->

        {{-- <section class="section" id="testimonials">
            @include('breez.sections.grid')
        </section> --}}

        {{-- --------------/contenido------------------/contenido----------------------  --}}

 
        
        <!-- ***** Footer Start ***** -->
        <footer>
            @include('breez.parts.futer_biz')
        </footer>

        @include('breez.parts.subfooter')
        

        {{-- scripts --}}
        @include('breez.parts.scripts')

    </body>
</html>