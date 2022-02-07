@extends('breez.layouts.actividadeslayout')
@section('content')

        <div class="Modern-Slider">

            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    
                    
                    <img class="imgbckgnd" src="{{ asset('airampo/img/galleria/Airampo Junio 2021-169.jpg') }}" alt="">
                    
                    <div class="text-content">
                        
                        <h2>CORREDOR VERDE</h2>
                        
            
                    </div>
                </div>
            </div>
            <!-- // Item -->

        </div>
        <style>

            .Modern-Slider .text-content {
                width: 60%;
            }

            .Modern-Slider .text-content h2{
                font-weight: 800;
            }
            /* margen costados @media (min-width: 680px) {    .slick-slider {        margin-right: 50px;        margin-left: 50px;    }  } */
            .img-fill {
                text-align: center; /* ensures the image is always in the h-middle */
                overflow: hidden; /* hide the cropped portion */
            }
            .imgbckgnd {
                position: relative; /* allows repositioning */
                left: 100%; /* move the whole width of the image to the right */
                margin-left: -200%; /* magic! */
            }
            .Modern-Slider .item .img-fill{
            background: #0000;
            }
            .Modern-Slider .text-content {
                /* background-color: #2c2c2d6e; */
                border-radius: 30px;
                padding: 20px;
            }
        
        </style>

        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                         
                        <div class="subscribe-content">
                            <br>
                            <h4 style="color: #2a416c; text-align: center;">
                                Un gran corredor verde que atraviesa todo el desarrollo, con 120 metros de ancho y casi 2kms de largo, es un excelente lugar para caminar, ejercitarse, andar en bicicleta o cabalgar entre árboles autóctonos, senderos y lomadas.
                            </h4>                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="testimonials" style="margin-top: 00px;">
            @include('breez.sections.galeria_actividades_corredor')
        </section>        

@endsection