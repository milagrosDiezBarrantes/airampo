<div class="Modern-Slider">
        
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                
                
                <img class="imgbckgnd" src="{{ asset('airampo/img/galleria/Airampo Junio 2021-84.jpg') }}" alt="">
                
                <div class="text-content">
                    
                    <h2>NÁUTICA</h2>
                    {{-- <br>
                    <h6>Con 13.160 hectáreas de espejo de agua, el dique Cabra Corral podrá poner en valor su belleza natural y explotar todo su potencial como destino náutico.El propietario de un velero, lancha o barco, contará con los siguientes servicios de: Guardería, Acarreo y desembarco, Mantenimiento y abastecimiento, amarras y muelle.</h6>
                    <h6>Será el lugar ideal para la práctica de todo tipo de deportes acuáticos.</h6> --}}
                    

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