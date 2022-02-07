<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> modal testuru</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.jpg">

    <link rel="stylesheet" href="{{ asset('airampo/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('airampo/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('airampo/css/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('airampo/css/light-box.css') }}">
    <link rel="stylesheet" href="{{ asset('airampo/css/templatemo-style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>


    <!-- responsive svg image overlays -->
    <style>
        #greenhouse {
            position: relative;
            width: 100%;
            vertical-align: middle;
            margin: 0;
            overflow: hidden;
        }
        
        #greenhouse svg {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        #lines {
            z-index: 3;
        }
        
        #greenhouse-details {
            display: flex;
            margin-top: 60%;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .narrow-text {
            background-color: #d4ffde;
            padding: 3% 5%;
            margin: 3%;
            flex-basis: 25%;
        }
        
        @media only screen and (max-width: 480px) {
            .narrow-text {
                flex-basis: 100%;
            }
        }
    </style>
    <!-- style us map -->
    <style>
        #us-map {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        path:hover,
        circle:hover {
            /*--------------color de l active-area-----------------------*/
            stroke: #2a416c69 !important;
            stroke-width: 2px;
            stroke-linejoin: round;
            fill: #2a416c69 !important;
            cursor: pointer;
        }
        
        #path67 {
            fill: none !important;
            stroke: #A9A9A9 !important;
            cursor: default;
        }
        
        #info-box {
            display: none;
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 1;
            background-color: #ffffff;
            border: 2px solid #BF0A30;
            border-radius: 5px;
            padding: 5px;
            font-family: arial;
        }
        /*  */
        
        #result-box iframe {
            width: 100%;
            height: 100%;
            border: none;
            background: white;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0
        }
    </style>
    <!-- .continer -->
    <style>
        .containersvg {
            /*background: url(http://i.imgur.com/b1K76Pf.jpg) no-repeat;*/
            /*background-size: contain;*/
            /* max-width: 960px; */
            max-width: 100%;
            /*height: 565px;*/
            margin: auto;
            position: relative;
            /* testing: por defecto hereda 15px en ambos lados, estos padding en cero para no deslinear con la imagen de fondo */
            padding-right: 0px;
            padding-left: 0px;
        }
        /* ---------------------- */
        
        .containersvg>img.bg_image {
            width: 100%;
            height: auto;
        }
        
        .main-roof {
            max-width: 100%;
            max-height: 100%;
            overflow: hidden;
            /* magia pura(?) */
            /*                  mix-blend-mode: multiply; */
            /* nice effect */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        
        svg {
            /*height: 565px;*/
            width: 100%;
            height: 103.5%;
        }
    </style>


</head>

<body>

    <nav style="background: #1a0f9f3b;">
        <div class="logo">
            <a href="#">
                <img src="https://airampo.com.ar/images/icons/logo.png" alt="" />
            </a>
        </div>
        <div>
            <div class="logo">
                <a href="#">
                    <span>h</span>
                </a>
            </div>
            <div class="logo">
                <a href="#">
                    <em>proyectos</em>
                </a>
            </div>
            <div class="logo">
                <a href="#">
                    <em>extras</em>
                </a>
            </div>
            <div class="logo">
                <a href="#">
                    <em>nosotros</em>
                </a>
            </div>
            <div class="logo">
                <a href="#">
                    <em>Contacto</em>
                </a>
            </div>

        </div>

        <div class="menu-icon">
            <span></span>
        </div>

    </nav>

    <div id="video-container">
        <div class="video-overlay" style="background: #2a416c;"></div>
        <div class="video-content" style="
        background-image: url('https://airampo.com.ar/fotos/home2.jpg'); 
        /* background-repeat: no-repeat;
        background-size:100% 100%;  */">

            <!-- <div class="video-overlay"></div>
        <div class="video-content"> -->
            <div class="inner">
                <h1>airampo <em>salta</em></h1>
                <p>Lorem ipsum dolor, Frase o slogan...</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{ asset('airampo/img/scroll-icon.png') }}" alt=""></a>
                </div>
            </div>
        </div>
        <!-- <video autoplay loop muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video> -->
        <!-- <img src="img/airampo_1.jpeg" alt=""> -->
    </div>





    <div class="grid-portfolio" id="portfolio" style="background-color: #2f4a7d;">
        <div class="container">
            <!-- la comida va aqui(?) -->
            <!-- inicio-mapa -->
            <div class="containersvg">
                <img src="https://airampo.com.ar/fotos/plano.jpg" class="bg_image" style="border-radius: 5%;" />

                <div class="main-roof">
                    <!-- svg -->
                    <svg xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="us-map" preserveAspectRatio="xMinYMin meet" sodipodi:docname="Republican_Party_presidential_primaries_results,_2016.svg"
                        inkscape:version="0.91 r13725" x="0px" y="0px" width="959px" height="593px" viewBox="-20 30 959 593" enable-background="new 174 100 959 593" xml:space="preserve">
                                                    <sodipodi:namedview bordercolor="#666666" objecttolerance="10" pagecolor="#ffffff" borderopacity="1" gridtolerance="10" guidetolerance="10" inkscape:cx="509.19152" inkscape:cy="282.2353" inkscape:zoom="1.2137643" showgrid="false" id="namedview71" inkscape:current-layer="g5" inkscape:window-maximized="1" inkscape:window-y="-8" inkscape:window-x="-8" inkscape:pageopacity="0" inkscape:window-height="1017" inkscape:window-width="1920" inkscape:pageshadow="2">
                                                    </sodipodi:namedview>
                                                    <g id="g5">
                                                        
                                                        
                                                        <path transform="rotate(102.512, 663.736, 445.73)" id="TX1" d="m646.24598,508.19327l6.55863,-124.92622l21.86209,0l6.55862,124.92622l-34.97934,0z" opacity="undefined" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(18.6595, 331.433, 241.237)" id="TX2" d="m219.52534,205.44216l223.81543,0l0,71.58893l-223.81543,0l0,-71.58893z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(19.1385, 312.994, 293.14)" id="TX3" d="m200.53086,279.14799l224.92628,0l0,27.98348l-224.92628,0l0,-27.98348z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(18.2736, 286.278, 361.879)" id="TX4" d="m392.38974,394.68127l-212.22342,21.86796l0,-109.3398l212.22342,0l0,87.47185z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(111.764, 85.1404, 302.236)" id="TX5" d="m158.36247,354.77614l-146.44417,35.02701l0,-175.13508l146.44417,0l0,140.10807z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(-67.6414, 104.051, 166.194)" id="TX6" d="m66.67948,100.21111l74.74349,-43.98861l0,219.94307l-74.74349,0l0,-175.95447z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(-140.131, 427.395, 515.632)" id="TX7" d="m405.90728,461.53555l42.97464,-36.06412l0,180.32063l-42.97464,0l0,-144.25651z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <path transform="rotate(-143.007, 492.681, 520.833)" id="TX8" d="m471.19328,472.92797l42.97464,-31.93685l0,159.6843l-42.97464,0l0,-127.74744z" opacity="undefined" fill-opacity="null" stroke-opacity="null" stroke-dasharray="null" stroke-width="0" stroke="#fff" fill="#b7ebb560"/>
                                                        <!-- <path id="TX" data-info="<div>State: Arizona</div><div>Capital: Phoenix</div>" fill="#D3D3D3" d="115,103 643,93 930,47 372,72" />
                                                        <path id="NV" data-info="<div>State: Nevada</div><div>Capital: Carson City</div>" fill="#D3D3D3" d="30,120 170,112 649,105 513,118    " /> -->
                                                    
                                                    
                                                        <!-- <path id="AR" data-info="<div>State: Arkansas</div><div>Capital: Little Rock</div>" fill="#D3D3D3" d="610,49 642,57 600,56 576,57   " />
                                                        
                                                        <path id="KS" data-info="<div>State: Kansas</div><div>Capital: Topeka</div>" fill="#D3D3D3" d="M677.4,425.1l-12.6,0.2l-46.1-0.5l-44.6-2.1l-24.6-1.3l4.1-64.7l21.8,0.8l40.5,1.4l44.1,0.5h5.1   " /> -->
                                                        
                                                        <!-- <g id="DC">
                                                        <path id="path58" fill="#D3D3D3" d="M975.8,353.8l-1.1-1.6l-1-0.8l1.1-1.6l2.2,1.5L975.8,353.8z" />
                                                        <circle id="circle60" data-info="<div>Washington DC</div>" fill="#D3D3D3" stroke="#FFFFFF" stroke-width="1.5" cx="975.3" cy="351.8" r="5" />
                                                        </g> -->
                                                    
                                                    </g>
                                                    <path id="path67" fill="none" stroke="#A9A9A9" stroke-width="2" d="M385,593v55l36,45 M174,525h144l67,68h86l53,54v46" />
                                                
                                                </svg>
                    <!-- /End-svg -->

                </div>

            </div>


            <!-- fin-mapa -->
            <div class="row">

                <!-- <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_4.jpg" data-lightbox="image-1">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h1>Biodiesel <em>squid</em></h1>
                                        <p>Awesome Subtittle Goes Here</p>
                                    </div>
                                </div>
                            </a>
                            <div class="image">
                                <img src="img/portfolio_item_4.jpg">
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- 
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">



                       




                    </div>
                </div> -->


            </div>


        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2021 En desarrollo | Designed by ReviradoTech</p>
            </div>
        </div>
    </footer>


    <div class="popup-icon">
        <a href="https://web.whatsapp.com/send?&text=hola" target="_blank">
            <button id="wspBtn" class="modal-btn">
                <img class="modal-btn" src="https://image.flaticon.com/icons/png/128/220/220236.png">                 
            </button>
        </a>
    </div>
    <!-- Modal button -->
    <div class="popup-icon">
        <button id="modBtn" class="modal-btn">
            <!-- <img src="img/contact-icon.png" alt=""> -->
        </button>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="header-title">Nombre del Proyecto <em>airampo</em></h3>
                <div class="close-btn"><img src="{{ asset('airampo/img/close_contact.png') }}" alt=""></div>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">

                <style>
                    @media (min-width:992px) {
                        .col-md-offset-3 {
                            margin-left: 10%;
                        }
                        .col-md-2 {
                            width: 30%;
                        }
                    }
                </style>
                <div class="col-md-2 col-md-offset-3">


                    <div class="row">

                        <img src="https://airampo.com.ar/fotos/centro-ecuestre.jpg" width="450px" style="border-radius: 5%;">

                    </div>

                </div>
                <div class="col-md-4 col-md-offset-3" style="text-align: left;  color: #fff;">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-12 col-sm-6">
                                <!-- <div class="service-item"> -->
                                <div class="icon">
                                    <img src="{{ asset('airampo/img/service_2.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h4>Aenean pellentesque</h4>
                                    <p>Donec et nisi sed magna tincidunt fermentum. Pellentesque eget semper felis, sit amet scelerisque neque.</p>
                                </div>
                                <!-- </div> -->
                            </div>

                        </div>
                        <div class="col-md-12">
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero explicabo possimus maiores iusto itaque dignissimos, veniam tenetur nihil odit tempora magni necessitatibus fugiat aliquid veritatis maxime vitae consequatur deserunt aliquam?</span>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <button>HOLA</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <section class="overlay-menu">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Proyectos</a>
                        </li>
                        <li>
                            <a href="#">Extras</a>
                        </li>
                        <li>
                            <a href="#">Nosotros</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                    </ul>
                    <p>AIRAMPO - Salta - Argentina</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"><\/script>')
    </script>

    <script src="{{ asset('airampo/js/vendor/bootstrap.min.js') }}"></script>

    <script src="{{ asset('airampo/js/plugins.js') }}"></script>
    <script src="{{ asset('airampo/js/main.js') }}"></script>

    <!-- script us map -->
    <script>
        TX1.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX2.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX3.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX4.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX5.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX6.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX7.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        TX8.onclick = function(event) {
            document.getElementById('modBtn').click();
        };
        $("path, circle").onclick = function(event) {

            alert('¡Genial!');

        };


        $("path, circle").hover(function(e) {
            $('#info-box').css('display', 'block');
            $('#info-box').html($(this).data('info'));
        });

        $("path, circle").mouseleave(function(e) {
            $('#info-box').css('display', 'none');
        });

        $(document).mousemove(function(e) {
            $('#info-box').css('top', e.pageY - $('#info-box').height() - 30);
            $('#info-box').css('left', e.pageX - ($('#info-box').width()) / 2);
        }).mouseover();

        var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        if (ios) {
            $('a').on('click touchend', function() {
                var link = $(this).attr('href');
                window.open(link, '_blank');
                return false;
            });
        }
    </script>

</body>

</html>