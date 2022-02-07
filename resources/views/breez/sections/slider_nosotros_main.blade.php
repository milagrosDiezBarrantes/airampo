<div class="Modern-Slider">
          
    <!-- Item -->
    <div class="item">
    
      <div class="img-fill">
          <img class="imgbckgnd" src="{{ asset("airampo/img/galleria/Airampo Junio 2021-150.jpg") }}" alt="">
          
          <div class="text-content">
            {{-- <div class="logomain"  >
              <img  style="min-width: 1%" src="https://airampo.com.ar/images/logo-interno.png" >
            </div> --}}
                 
            <h2>QUIENES SOMOS</h2>
            <br>
            {{-- <h6>El aire, el campo, el sol, la temperatura agradable y algunas lluvias son los elementos que necesita el cardón de nuestros valles para darnos esa flor, que nuestros ancestros llamaron Airampo</h6> --}}
                        

        </div>
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

  .Modern-Slider .text-content {
    /* background-color: #2c2c2d6e; */
    border-radius: 30px;
    padding: 20px;

    width: 60%;
  }
  .Modern-Slider .text-content h2{
    font-weight: 800;
  }

  @media (min-width: 480px) {
   .logomain{
        height:300px; padding: 50px;
    }
  }

  .Modern-Slider .item .img-fill {
    height: 90vh;
  }
 
</style>