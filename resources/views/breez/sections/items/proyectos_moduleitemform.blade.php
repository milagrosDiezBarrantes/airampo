
{{-- <div class="more-info-content"> --}}
    <div id="modaltitle">
            <h4>LOTE /<em> PROYECTO </em></h4>
    </div>

    <div class="row">

        
        <div id="modaldescrip" class="col-md-7">
            {{-- <span>Descripción</span> --}}
            <h2>Descripción  <em></em></h2>                
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus possimus ex, unde quasi tenetur aliquid dignissimos similique vero laborum obcaecati excepturi harum illo. Vel blanditiis ad ratione sunt optio soluta? 
            <br><br>
            <em>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus voluptate delectus assumenda quam nihil, voluptates sapiente provident ea illum nisi eius veniam. Ex inventore laudantium a ullam quibusdam nam exercitationem.
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

    <div class="col-md-12">
        <div class="left-image" >                
            @include('breez.sections.slider_itemlink')
        </div>
    </div>  
    
{{-- </div> --}}

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
