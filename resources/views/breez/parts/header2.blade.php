<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="main-nav" >{{-- style="background: #162d9bc9;" --}}
                <!-- ***** Logo Start ***** -->
                <a href="#" class="logo">
                     
                        <img src="{{ asset('breez/assets/images/logo_small.png') }}" alt="" />
                     
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                    <li class="scroll-to-section"><a href="/proyectos">Lotes</a></li>
                    {{-- <li class="scroll-to-section"><a href="/actividades">Actividades</a></li> --}}
                    <li class="submenu">
                        <a href="/actividades">Actividades</a>
                        <ul>
                            <li><a href="/actividades/nautica">Náutica</a></li>
                            <li><a href="/actividades/bar">Bar</a></li>
                            <li><a href="/actividades/ecuestre">Ecuestre</a></li>
                            <li><a href="/actividades/corredor">Corredor Verde</a></li>
                        </ul>
                    </li>
                    <li class="scroll-to-section"><a href="/nosotros">Nosotros</a></li>
                    <li class="scroll-to-section"><a href="/contacto">Contacto</a></li> 
                    {{-- <div class="search-icon">
                        <a href="#search"><i class="fa fa-search"></i></a>
                    </div> --}}
                </ul>        
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
</div>
<style>
    .header-area .main-nav .nav li.submenu::after {
        content: "\f103";
    }
    @media (max-width: 767px) {
        .header-area .main-nav .nav li.submenu::after {
            font-size: 20px;
        }
    }
</style>