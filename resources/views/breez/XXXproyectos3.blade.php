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
        <!-- ***** Search Area End ***** -->

        
        
        {{-- --------------contenido------------------contenido----------------------  --}}


        {{-- <section class="section" id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading">
                            <h6></h6>
                            <h2>LOTES</h2>
                        </div>
                        <div class="subscribe-content">
                            <p>El aire, el campo, el sol, la temperatura agradable y algunas lluvias son los elementos que necesita el cardón de nuestros valles para darnos esa flor, que nuestros ancestros llamaron Airampo</p>
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
        <div class="scroll-down scroll-to-section"><a href="#projects"><i class="fa fa-arrow-down"></i></a></div> --}}
          



        {{-- <section class="section" id="projects" >
            
                <div class="item author-item">
                    <div class="member-thumb">
                        <img src="{{ asset('breez/assets/images/airampo_thumb.png') }}" alt="">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <ul>                                    
                                        <a href="/actividades/polo">
                                             <p>
                                            Con 13.160 hectáreas de espejo de agua, el dique Cabra Corral podrá poner en valor su belleza natural y explotar todo su potencial como destino náutico.
                                            </p>  
                                        </a>                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
             
        </section> --}}

        <style>
                #projects {
                    /* margin-top: 120px;
                    padding: 80px 0px;
                    padding: 120px 0px; */
                    background-image: url( {{ asset('breez/assets/images/airampo_3.jpeg') }} );
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #projects .section-heading {
                    text-align: center;
                    color: #fff;
                    margin-bottom: 60px;
                }

                #projects .item {
                    position: relative;
                    text-align: center;
                }

                #projects .item h4 {
                    font-size: 17px;
                    font-weight: 700;
                    text-transform: uppercase;
                    color: #fff;
                    letter-spacing: 1px;
                    margin-top: 22px;
                    margin-bottom: 7px;
                }

                #projects .item span {
                    color: #fff;
                    font-weight: 500;
                    font-size: 13px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                #projects .item .member-thumb {
                    position: relative;
                }

                #projects .item .hover-effect {
                    cursor: pointer;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: rgba(0, 0, 0, 0.95);
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transition: all 0.5s ease 0s;
                    -moz-transition: all 0.5s ease 0s;
                    -o-transition: all 0.5s ease 0s;
                    transition: all 0.5s ease 0s;
                }

                #projects .item .hover-content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 100%;
                }

                #projects .item:hover .hover-effect {
                    opacity: 1;
                    visibility: visible;
                }

                #projects .item .hover-effect ul li {
                    display: inline-block;
                    margin: 0px 5px;
                }

                #projects .item .hover-effect ul li a {
                    width: 32px;
                    height: 32px;
                    display: inline-block;
                    text-align: center;
                    line-height: 32px;
                    font-size: 14px;
                    background-color: #fff;
                    border-radius: 50%;
                    color: #5fb759;
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
                }

                #projects .item .hover-effect ul li a:hover {
                    color: #fff;
                    background-color: #5fb759;
                }
        </style>



        <!-- ***** Projects Area Starts ***** -->
        <section class="section" id="projects">
            @include('breez.sections.grid')
        </section>
        <!-- ***** Projects Area Ends ***** -->

        {{-- --------------/contenido------------------/contenido----------------------  --}}

        
        
        <!-- ***** Footer Start ***** -->
        <footer>
            @include('breez.parts.footer')
        </footer>
        

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