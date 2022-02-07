@extends('breez.layouts.actividadeslayout')
@section('content')

        @include('breez.sections.slider_actividades_item_nautic')

        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff;">
            {{-- style="background-image: url('https://airampo.com.ar/fotos/polo/2.jpg')" --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                         
                        <div class="subscribe-content">
                            <h4 style="color: #2a416c; text-align: center;">
                                Con 13.160 hectáreas de espejo de agua, el dique Cabra Corral podrá poner en valor su belleza natural y explotar todo su potencial como destino náutico.El propietario de un velero, lancha o barco, contará con los siguientes servicios de: Guardería, Acarreo y desembarco, Mantenimiento y abastecimiento, amarras y muelle.                               
                            </h4>
                            <h4 style="color: #2a416c; text-align: center;">
                                Será el lugar ideal para la práctica de todo tipo de deportes acuáticos.
                            </h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="section" id="testimonials" style="margin-top: 00px;">
            @include('breez.sections.galeria_actividades_nautico')
        </section>

        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <iframe width="100%" height="500"
                            src="https://www.youtube.com/embed/rRrNPfOPl6E" 
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

         

@endsection