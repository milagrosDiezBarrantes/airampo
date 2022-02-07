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
        
        @yield('content')

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