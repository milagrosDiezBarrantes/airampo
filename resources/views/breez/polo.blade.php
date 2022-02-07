@extends('breez.layouts.actividadeslayout')
@section('content')

        
        {{-- video --}}
        <section class="section" id="subscribe" >
            {{-- style="background-image: url('https://airampo.com.ar/fotos/polo/2.jpg')" --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading">
                            <h6></h6>
                            <h2>POLO</h2>
                        </div>
                        <div class="subscribe-content">
                            <p>
                                Escuela de Polo. Alquiler de caballos para jugadores. Torneos de bajo y mediano handicap. Programas Turísticos con uno o más días de polo, campo, asados, clases y exhibiciones. Eventos empresariales.
                                <br>
                                El clima, suelos arenosos, la disponibilidad de agua y el paisaje, harán que las dos canchas de polo de AIRAMPO sean únicas y que puedan disfrutarse todo el año.
                            </p>
                            <div class="subscribe-form">
                                <form id="subscribe-now" action="" method="get">
                                    <div class="row">
                                        
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff">
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

       <!-- ***** Galeria ***** -->
        {{-- <section class="section" id="projects" style=" background-color: #ffff; color: #2a416c;">
            @include('breez.sections.galeria')
        </section> --}}
        <!-- ***** End Galeria ***** -->

        <section class="section" id="testimonials" style="margin-top: 00px;">
            @include('breez.sections.galeria_actividades')
        </section>        

@endsection