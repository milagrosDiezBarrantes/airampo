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
                            <li class="active" data-titulo = "ZONA POLO" 
                                data-descrip = "Rodeado de entre medio de cerros pintorescos encontramos un centro ecuestre, la cual se encuentra adaptada y acondicionada para la cría, cuidado y entrenamiento de caballos, dos canchas de polos y una pista de equitación."
                                data-link = "/polo"
                                data-imgcarrousel1 = "{{ asset("airampo/img/render1_1200x750.jpg") }}"
                                data-imgcarrousel2 = "{{ asset("airampo/img/galleria/Airampo Junio 2021-111_thmb.jpg") }}"
                                data-imgcarrousel3 = "{{ asset("airampo/img/galleria/Airampo Junio 2021-111_thmb.jpg") }}"
                            >ZONA POLO</li>
                            <li data-titulo = "ZONA BOULEVARD" 
                                data-descrip ="Para acceder a la urbanización se debe atravesar por medio de grandes calles anchas que dan lugar a la Villa de Airampo, la cual cuenta con lotes de 800 metros cuadrados, con los servicios de luz, agua y gas. Además se puede apreciar un gran corredor verde que cuenta con una gran vegetación, árboles autóctonos, senderos y lomadas, todo adaptado para el desarrollo de actividades tales como caminar, ejercitarse, andar en bicicleta, cabalgar, entre otros."
                                data-link ="/boulevard"
                                data-imgcarrousel1 = "{{ asset("airampo/img/render1_1200x750.jpg") }}" 
                                data-imgcarrousel2 = "{{ asset("airampo/img/galleria/TERRENO LOTEO 2.JPG") }}" 
                                data-imgcarrousel3 = "{{ asset("airampo/img/galleria/TERRENO LOTEO 2.JPG") }}"
                            >ZONA BOULEVARD</li>
                            <li data-titulo = "ZONA LAGO" 
                                data-descrip = "En esta zona nos encontramos con una gran bahía de playas verdes y una península, que forman una entrada única y natural hacia el agua. La misma cuenta con un centro náutico para el servicio de primer nivel para todo tipo de embarcaciones."
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
                            @include('breez.sections.items.proyectos_moduleitemform')
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
