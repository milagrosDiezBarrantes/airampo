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
                <div class="container">

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="section-heading">
                                <h6>PROYECTOS</h6>
                                
                                <h2>Generaciones</h2>
                                <p>  Compartimos el sueño de convertirlo en algo especial, que perdure en el tiempo y pueda ser disfrutado por la sociedad.</p>

                                <div class="filters">
                                    <ul>
                                        {{-- <li id = "filter-all" class="active" data-filter="*">Todos</li> --}}
                                        <li data-titulo = "ZONA POLO" 
                                            data-descrip = " "
                                            data-link = "/polo"
                                            data-imgcarrousel1 = "{{ asset("airampo/img/render1_1200x750.jpg") }}"
                                            data-imgcarrousel2 = "{{ asset("airampo/img/galleria/Airampo Junio 2021-111_thmb.jpg") }}"
                                            data-imgcarrousel3 = "{{ asset("airampo/img/galleria/Airampo Junio 2021-111_thmb.jpg") }}"
                                        >ZONA POLO</li>
                                        <li class="active" data-titulo = "ZONA BOULEVARD" 
                                            data-descrip =" "
                                            data-link ="/boulevard"
                                            data-imgcarrousel1 = "{{ asset("airampo/img/render1_1200x750.jpg") }}" 
                                            data-imgcarrousel2 = "{{ asset("airampo/img/galleria/TERRENO LOTEO 2.JPG") }}" 
                                            data-imgcarrousel3 = "{{ asset("airampo/img/galleria/TERRENO LOTEO 2.JPG") }}"
                                        >ZONA BOULEVARD</li>
                                        <li data-titulo = "ZONA LAGO" 
                                            data-descrip = "/lago"
                                            data-link = "/lago"
                                            data-imgcarrousel1 = "{{ asset("airampo/img/render1_1200x750.jpg") }}" 
                                            data-imgcarrousel2 = "{{ asset("airampo/img/galleria/Airampo Junio 2021-33_thmb.jpg") }}" 
                                            data-imgcarrousel3 = "{{ asset("airampo/img/galleria/Airampo Junio 2021-33_thmb.jpg") }}"
                                        >ZONA LAGO</li>
                                    
                                    </ul>
                                </div>
                                
                            </div>
                            

                        </div>
                        <div class="col-lg-9">
                            <div class="filters-content" style="">
                                <div class="esto-era-un-row-grid-pero-ya-no">

                                    {{-- item area --}}
                                    

                                    <div id="modal1" style="margin-bottom: 50px">
                                        
                                        {{-- <div class="more-info-content"> --}}
                                            <div id="modaltitle">
                                                    <h4>ZONA BOULEVARD</h4>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="left-image" >                
                                                    <div class="Modern-Slider">
        
                                                            <!-- Item -->
                                                            <div class="item">
                                                            
                                                            <div class="img-fill">
                                                                <img id="imgcarrousel1" class="imgbckgnd" src="{{ asset("airampo/img/galleria/airampo_boulevard.png") }}" alt="">
                                                            </div>
                                                            </div>
                                                            <!-- // Item -->

                                                        </div>
                                                        <style>
                                                        
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
                                                            background: #2a416c;
                                                        }
                                                        
                                                        </style>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div id="modaldescrip" class="col-md-7">
                                                    {{-- <span>Descripción</span> --}}
                                                    <h2>Descripción  <em></em></h2>                
                                                    <p>Para acceder a la urbanización se debe atravesar por medio de grandes calles anchas que dan lugar a la Villa de Airampo, la cual cuenta con lotes de 800 metros cuadrados, con los servicios de luz, agua y gas. 
                                                    <br><br>
                                                    <em>
                                                        Además se puede apreciar un gran corredor verde que cuenta con una gran vegetación, árboles autóctonos, senderos y lomadas, todo adaptado para el desarrollo de actividades tales como caminar, ejercitarse, andar en bicicleta, cabalgar, entre otros. 
                                                    </em>
                                                
                                                    </p>
                                                    
                                                </div>
                                                

                                                
                                                <div class="col-md-5 align-self-center" style="margin-top: 35px;">
                                                    <div class="right-content">
                                                    
                                                        <div class="col-md-12 col-md-offset-3" style="padding-right: 0px; text-align: left;  color: #fff;">
                                                            <h5>Contacto</h5>
                                                            <div class="row" style="margin: 1%">
                                                                <div class="col-md-12"  
                                                                    style="padding-right: 5px;
                                                                            padding-left: 5px;">
                                                                    
                                                                    <div id="modaltitle" class="text">
                                                                        
                                                                        {{-- <span>Nombre y Apellido</span> --}}
                                                                        <input type="text" class="form-control" placeholder="Tu Nombre">
                                                                        
                                                                    </div>
                                                                    

                                                                </div>

                                                                <div class="col-md-12" 
                                                                    style="padding-right: 5px;
                                                                    padding-left: 5px;">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-6" >
                                                                            {{-- <span>Teléfono</span> --}}
                                                                            <input type="text" class="form-control" rows="2" placeholder="Tu Teléfono">
                                                                        </div>

                                                                        <div class="col-md-6" >
                                                                            {{-- <span>Email</span> --}}
                                                                            <input name="campo3" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                                                                        </div>

                                                                    </div>
                                                                    
                                                                    <fieldset>
                                                                        {{-- <span>Mensaje</span> --}}
                                                                    <textarea name="message" class="form-control" rows="8" id="message" placeholder="Mensaje" required=""></textarea>
                                                                    </fieldset>
                                                                    

                                                                    <button  type="submit" 
                                                                    {{-- id="btnwsp" --}}
                                                                    class="main-button" style="position: relative; margin-top: 20px;">Enviar</button>
                                                                
                                                                </div>

                                                            </div>

                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                        
                                            </div>
                                            
                                            
                                        

                                        <style>
                                            .Modern-Slider .item .img-fill {
                                                height: 65vh;
                                            }

                                            button.main-button {
                                                background-color: #2a436e;
                                                color: #fafbfa;
                                            }

                                            .more-info .left-image img {
                                                width: 100%;
                                                overflow: hidden;
                                                border-radius: 10px;
                                            }
                                            .more-info {
                                                margin-top: 40px;
                                                margin-bottom: 50px;
                                            }
                                            .form-control {
                                                margin-bottom: 10px;
                                            }
                                        </style>
                                    </div>

                                    

                                    {{-- end item area --}}

                                </div>
                            </div>
                        </div>            
                    </div>
                </div>

                
                <style>
                    #modal1 {
                        /*inicia siendo invisible opacity: 0*/            
                        opacity: 1;
                    }
                    #modal1 .close {
                        
                    }

                    #modal1.open {
                    
                        opacity: 1;
                    }
                </style>
                
                <style>
                    /* ---------------------------------------------
                    ITEMS PC
                    --------------------------------------------- */
                    #projects {
                        /* margin-top: 120px;
                        padding: 80px 0px;
                        padding: 120px 0px; */
                        /* background-image: url( {{ asset('breez/assets/images/airampo_3.jpeg') }} ); */
                        background-position: center center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    #projects .item .hover-effect {
                        cursor: pointer;
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        /* width: 100% */
                        width: 90%;
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
                    
                    textarea {
                        width: 100%;
                        max-height: 160px;
                        border-radius: 19px;
                        border: 1px solid #fff;
                        background-color: transparent;
                        padding: 0px 20px;
                        font-size: 13px;
                        color: #fff;
                        outline: none;
                    }

                    /* FILTROS ------------------------------------------*/
                    #projects .filters ul li {
                        background-color: #2a436e;;
                        border-radius: 15px;
                        text-align: center;
                    }
                    #projects .filters ul li {
                        padding: 10px;
                        /* width: 100px; */
                    }

                    ul, li {
                        margin-bottom: 5px;
                    }
                    
                    #projects .filters ul li.active, #projects .filters ul li:hover {
                        
                        background-color: aliceblue;
                    }
                    /*  no c v tan bien en mobile*/
                    #projects .filters ul {
                        padding-left: 15px;
                        padding-right: 15px;
                    }

                    #projects p {
                        color: #2a416c;
                    }


                </style>

        </section>
        <!-- ***** /GRID ***** -->

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
