
<div id="modal1">

    {{-- style="height: 25%" --}}
    {{-- <div class="row margen">
    </div> --}}

    <button type="button" class="close" style="z-index: 9900;">×</button>
    <div class="modal-body" 
    style="
    margin-left:8%;margin-right:8%; 
    max-height: calc(100vh - 110px);
    overflow-y: auto;">

       
        <div class="row" >
            {{-- galeria --}}
            <div class="col-md-5 col-md-offset-3" >
                <div class="row">
                    <a href="{{ asset('breez/assets/images/airampo_thumb.png') }}" data-lightbox="image-1" data-title="Galeria">
                        {{-- <img src="{{ asset('breez/assets/images/airampo_thumb.png') }}" alt=""> --}}
                        <img id="modalpic" src="https://airampo.com.ar/fotos/centro-ecuestre.jpg" width="100%" style="display:block; margin:auto; border-radius: 5%;">
                        </a>
                        <div class="row" style="padding: 10px">
                            <div class="col">
                                <a href="{{ asset('breez/assets/images/airampo_thumb.png') }}" data-lightbox="image-1" data-title="Galeria">
                                    <img id="modalpic" src="https://airampo.com.ar/fotos/centro-ecuestre.jpg" width="80%" style="display:block; margin:auto; border-radius: 5%;">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('breez/assets/images/airampo_thumb.png') }}" data-lightbox="image-1" data-title="Galeria">
                                    <img id="modalpic" src="https://airampo.com.ar/fotos/centro-ecuestre.jpg" width="80%" style="display:block; margin:auto; border-radius: 5%;">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ asset('breez/assets/images/airampo_thumb.png') }}" data-lightbox="image-1" data-title="Galeria">
                                    <img id="modalpic" src="https://airampo.com.ar/fotos/centro-ecuestre.jpg" width="80%" style="display:block; margin:auto; border-radius: 5%;">
                                </a>
                            </div>
                        </div>
                </div>
            </div>

            {{-- info --}}
            <div class="col-md-7 col-md-offset-3" style="padding-right: 0px; text-align: left;  color: #fff;">

                <div class="row" style="margin: 1%">
                    {{-- titulo + info --}}
                    <div class="col-md-12"  
                    style="padding-right: 5px;
                            padding-left: 5px;">
                        
                        <div id="modaltitle" class="text">
                            <h4>Lorem ipsum</h4>
                            <p>Donec et nisi sed magna tincidunt fermentum. Pellentesque eget semper felis, sit amet scelerisque neque.</p>
                        </div>
                        

                    </div>

                    <div class="col-md-12" 
                    style="padding-right: 5px;
                    padding-left: 5px;">
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero explicabo possimus maiores iusto itaque dignissimos, veniam tenetur nihil odit tempora magni necessitatibus fugiat aliquid veritatis maxime vitae consequatur deserunt aliquam?</span>
                        {{-- <div class="modalbtnform1">
                            <a  href="#debug_modal_form" > hola</a>
                        </div> --}}
                        <h4>Conctacto</h4>
                    </div>


                    {{-- form --}}
                    <div class="col-md-12 col-md-offset-3" style="padding-right: 0px; text-align: left;  color: #fff;">

                        <div class="row" style="margin: 1%">
                            <div class="col-md-12"  
                                style="padding-right: 5px;
                                        padding-left: 5px;">
                                
                                <div id="modaltitle" class="text">
                                    
                                    <span>Nombre y Apellido</span>
                                    <input type="text" placeholder="Tu Nombre">
                                    
                                </div>
                                
    
                            </div>
    
                            <div class="col-md-12" 
                                style="padding-right: 5px;
                                padding-left: 5px;">
                                
                                <div class="row">
                                    <div class="col-md-6" >
                                        <span>Teléfono</span>
                                        <input type="text" rows="2" placeholder="Tu Teléfono">
                                    </div>
    
                                    <div class="col-md-6" >
                                        <span>Email</span>
                                        <input name="campo3" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Deja Tu E-Mail" required="">
                                    </div>
    
                                </div>
                                
                                
                              
                                
                                <fieldset>
                                    <span>Mensaje</span>
                                  <textarea name="message" rows="4" id="message" placeholder="Mensaje" required=""></textarea>
                                </fieldset>
                                
    
                              <button  type="submit" 
                              {{-- id="btnwsp" --}}
                              class="main-button" style="position: relative; margin-top: 20px;">Enviar</button>
                            
                            </div>
    
    
                            {{-- <div class="col-md-12" style="text-align: center;">
    
                                <div class="row">
                                    <button id="btnform" type="button" 
                                    class="main-button" style="position: relative; margin-top: 20px;">Mensaje</button>    
                                </div>
                
                                <div class="row">
                                    <button id="btnwsp" type="submit" 
                                    class="main-button" style="position: relative; margin-top: 20px;">WHATSAPP</button>
                                </div> 
                
                            </div> --}}
                           
    
                        </div>
    
                    </div>

                    {{-- botones --}}
                    <div class="col-md-12" style="text-align: center;">
                        <div class="row">
                           
                            <div class="col">
                                <button type="submit" 
                                class="main-button" style="position: relative;left: 25%;">
                                    <span class="fa fa-facebook"></span>
                                </button>
                            </div>
                            <div class="col">
                                <button type="submit" 
                                class="main-button" style="position: relative;left: 25%;">
                                    <span class="fa fa-twitter"></span>
                                </button>
                            </div> 
                            <div class="col">
                                <button type="submit" 
                                class="main-button" style="position: relative;left: 25%;">
                                    <span class="fa fa-whatsapp"></span>
                                </button>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <button id="btnform" type="button" 
                            class="main-button" style="position: relative; margin-top: 20px;">Mensaje</button>    
                        </div>
        
                        <div class="row">
                            <button id="btnwsp" type="submit" 
                            class="main-button" style="position: relative; margin-top: 20px;">WHATSAPP</button>
                        </div>  --}}
                        
        
                    </div>
                   

                </div>

            </div>
            
            
        </div>            
        
       
    </div>

</div>

<div id="modalform1">

    <div class="row margenform" style="text-align: center;">
        
            <div class="col-md-12" >
                <h4  style="padding-top: 5%;">Hacenos tu consulta!</h4>
            </div>
    </div>

    <button type="button" class="close" style="z-index: 9990;">×</button>
    <div class="modal-body" 
    style="
    margin-left:8%;margin-right:8%; 
    /* max-height: calc(100vh - 110px);
    overflow-y: auto; */
    ">

       
        <div class="row" >
            <div class="col-md-4 col-md-offset-3" >
                <div class="row">
                   
                    {{-- <a href="{{ asset('breez/assets/images/airampo_thumb.png') }}" data-lightbox="image-1" data-title="Galeria"> --}}
                        {{-- <img src="{{ asset('breez/assets/images/airampo_thumb.png') }}" alt=""> --}}
                        <img id="modalpic" src="https://airampo.com.ar/images/icons/logo.png" 
                            width="300px"  {{-- <--porcentaje --}}
                            style="display:block; margin:auto; border-radius: 5%;">
                        {{-- </a> --}}
                       
                </div>
            </div>

            <div class="col-md-8 col-md-offset-3" style="padding-right: 0px; text-align: left;  color: #fff;">

                <div class="row" style="margin: 1%">
                    <div class="col-md-12"  
                        style="padding-right: 5px;
                                padding-left: 5px;">
                        
                        <div id="modaltitle" class="text">
                            <span>Nombre y Apellido</span>
                            <input type="text" placeholder="Tu Nombre">
                            
                        </div>
                        

                    </div>

                    <div class="col-md-12" 
                        style="padding-right: 5px;
                        padding-left: 5px;">
                        
                        <div class="row">
                            <div class="col-md-6" >
                                <span>Teléfono</span>
                                <input type="text" rows="2" placeholder="Tu Teléfono">
                            </div>

                            <div class="col-md-6" >
                                <span>Email</span>
                                <input name="campo3" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Deja Tu E-Mail" required="">
                            </div>

                        </div>
                        
                        
                      
                        
                        <fieldset>
                            <span>Mesnaje</span>
                          <textarea name="message" rows="4" id="message" placeholder="Mensaje" required=""></textarea>
                        </fieldset>
                        

                      <button id="btnwsp" type="submit" 
                      class="main-button" style="position: relative; margin-top: 20px;">Enviar</button>
                    
                    </div>


                    {{-- <div class="col-md-12" style="text-align: center;">

                        <div class="row">
                            <button id="btnform" type="button" 
                            class="main-button" style="position: relative; margin-top: 20px;">Mensaje</button>    
                        </div>
        
                        <div class="row">
                            <button id="btnwsp" type="submit" 
                            class="main-button" style="position: relative; margin-top: 20px;">WHATSAPP</button>
                        </div> 
        
                    </div> --}}
                   

                </div>

            </div>
            
        </div>            
        
       
    </div>

</div>
<style>
    /* ---------------------------------------------
        modal
        --------------------------------------------- */

        #modal1 {
            z-index: 9900;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-transform: translate(0px, -100%) scale(0, 0);
            -moz-transform: translate(0px, -100%) scale(0, 0);
            -o-transform: translate(0px, -100%) scale(0, 0);
            -ms-transform: translate(0px, -100%) scale(0, 0);
            transform: translate(0px, -100%) scale(0, 0);
            opacity: 0;
        }

        /* #modal1 input {
            position: absolute;
            top: 50%;
            width: 100%;
            color: white;
            background: rgba(0, 0, 0, 0);
            font-size: 60px;
            font-weight: 300;
            text-align: center;
            border: 0px;
            margin: 0px auto;
            margin-top: -51px;
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
        } */
        #modal1 input {         
            width: 100%;
            height: 38px;
            border-radius: 19px;
            border: 1px solid #fff;
            background-color: transparent;
            padding: 0px 20px;
            font-size: 13px;
            color: #fff;
            outline: none;
        }

        #modal1 .main-button {
            /* airampo boton de busqueda */
            color: #000000;
            /* fff */
            position: absolute;
            text-transform: uppercase;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            padding: 11px 25px;
            letter-spacing: 1px;
            transform: translateX(-15%);
            top: 0%;
            left: 50%;
            margin-top: 61px;
            margin-left: -45px;
            background-color: #ffffff;
            /* 5fb759 */
            border: black;
        }


        #modal1 .main-button:hover {
            color: #fff;
            background-color: #5fb759;
        }


        #modal1 .close {
            border-radius: 50%;
            position: fixed;
            top: 15px;
            right: 15px;
            color: rgb(0, 0, 0);
            /* fff */
            background-color: #ffffff;
            /* 5fb759 */
            outline: none;
            opacity: 1;
            display: inline-block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 60px;
            font-size: 28px;
        }

        #modal1.open {
            -webkit-transform: translate(0px, 0px) scale(1, 1);
            -moz-transform: translate(0px, 0px) scale(1, 1);
            -o-transform: translate(0px, 0px) scale(1, 1);
            -ms-transform: translate(0px, 0px) scale(1, 1);
            transform: translate(0px, 0px) scale(1, 1);
            opacity: 1;
        }

        /* modal FORM ---------------------------------*/
        #modalform1 {
            z-index: 9990;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: #2a2f75;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-transform: translate(0px, -100%) scale(0, 0);
            -moz-transform: translate(0px, -100%) scale(0, 0);
            -o-transform: translate(0px, -100%) scale(0, 0);
            -ms-transform: translate(0px, -100%) scale(0, 0);
            transform: translate(0px, -100%) scale(0, 0);
            opacity: 0;
        }

        #modalform1 input {
            /* position: absolute;
            top: 50%;
            width: 100%;
            color: white;
            background: rgb(80, 80, 80);
            font-size: 60px;
            font-weight: 300;
            text-align: center;
            border: 0px;
            margin: 0px auto;
            margin-top: -51px;
            padding-left: 30px;
            padding-right: 30px;
            outline: none; */
            width: 100%;
            height: 38px;
            border-radius: 19px;
            border: 1px solid #fff;
            background-color: transparent;
            padding: 0px 20px;
            font-size: 13px;
            color: #fff;
            outline: none;
        }

        #modalform1 .main-button {
            /* airampo boton de busqueda */
            color: #000000;
            /* fff */
            position: absolute;
            text-transform: uppercase;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            padding: 11px 25px;
            letter-spacing: 1px;
            transform: translateX(-15%);
            top: 5%;
            left: 50%;
            margin-top: 61px;
            margin-left: -45px;
            background-color: #ffffff;
            /* 5fb759 */
            border: black;
        }


        #modalform1 .main-button:hover {
            color: #fff;
            background-color: #5fb759;
        }


        #modalform1 .close {
            border-radius: 50%;
            position: fixed;
            top: 15px;
            right: 15px;
            color: rgb(0, 0, 0);
            /* fff */
            background-color: #ffffff;
            /* 5fb759 */
            outline: none;
            opacity: 1;
            display: inline-block;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 60px;
            font-size: 28px;
        }

        #modalform1.open {
            -webkit-transform: translate(0px, 0px) scale(1, 1);
            -moz-transform: translate(0px, 0px) scale(1, 1);
            -o-transform: translate(0px, 0px) scale(1, 1);
            -ms-transform: translate(0px, 0px) scale(1, 1);
            transform: translate(0px, 0px) scale(1, 1);
            opacity: 1;
        }
</style>