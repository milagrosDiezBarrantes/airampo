@extends('breez.layouts.actividadeslayout')
@section('content')

        @include('breez.sections.slider_actividades_item_ecuestre')

        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff;">
            {{-- style="background-image: url('https://airampo.com.ar/fotos/polo/2.jpg')" --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                         
                        <div class="subscribe-content">
                            <div class="subscribe-content">
                                <h4 style="color: #2a416c; text-align: center;">
                                    Pocas cosas despiertan tanta pasión para el hombre como cuando experimentamos una conexión genuina con el caballo, en Coronel Moldes ésta afición es parte de su cultura.
                                </h4>
                                <br>                                 
                                <h4 style="color: #2a416c; text-align: center;">
                                    Pensión en potreros, corrales y caballerizas de primera calidad. Centro de cría y reproducción. Doma y hechura. Picadero y pistas de vareo. Matera y galpón para forrajes y monturas. Cabalgatas programadas a distintos atractivos de la zona.
                                </h4>
                                <br>
                                <h4 style="color: #2a416c; text-align: center;">
                                    Todo el proceso de alimentación, cría, veterinaria, amanse y hechura de los caballos podrá ser seguido de cerca por sus dueños a través de un software y videos para equipos móviles.
                                </h4> 
                            </p>
                            
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
                            src="https://www.youtube.com/embed/iK6T1WaKwO8" 
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

        <section class="section" id="testimonials" style="margin-top: 00px;">
            @include('breez.sections.galeria_actividades_ecu')
        </section>        

@endsection