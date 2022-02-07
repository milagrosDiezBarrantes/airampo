@extends('breez.layouts.actividadeslayout')
@section('content')

        <div class="Modern-Slider">

            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    
                    
                    <img class="imgbckgnd" src="{{ asset('airampo/img/galleria/RENDER_6.jpeg') }}" alt="">
                    
                    <div class="text-content">
                        
                        <h2>BAR</h2>
                        
            
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
                height: 100%;/* <--- altura de imagen*/
            }
            .Modern-Slider .text-content {
                /* background-color: #2c2c2d6e; */
                border-radius: 30px;
                padding: 20px;
            }
        
        </style>

        <section class="section" id="subscribe" style="background-image: none; background-color: #ffff;">
            {{-- style="background-image: url('https://airampo.com.ar/fotos/polo/2.jpg')" --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                         
                        <div class="subscribe-content">
                            <h4 style="color: #2a416c; text-align: center;">
                                <br><br>
                                Airampo cuenta con un espacio amplio y al aire libre para poder disfrutar y compartir momentos únicos con amigos y en familia
                            </h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
       

        <section class="section" id="testimonials" style="margin-top: 00px; background-color: white">
            @include('breez.sections.galeria_actividades_bar')
        </section>        

@endsection
