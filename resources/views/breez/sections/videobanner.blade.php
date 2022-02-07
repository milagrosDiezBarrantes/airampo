<div class="Modern-Slider">

  <!-- Item -->
  <div class="item">
    <div class="img-fill">
        
        
        <img id="imgbg" class="imgbckgnd" src="{{ asset('airampo/img/galleria/Airampo Junio 2021-169.jpg') }}">
        <video id="videobg" src="https://www.tooplate.com/templates/2095_level/videos/video.mp4" autoplay muted loop></video>
        <style>
          /* #videobg{
            position: fixed;
            z-index: -1;
          } */
          @media (min-aspect-ratio: 16/9){
            #videobg{
              width: 100%;
              height: auto;
            }
          }
          @media (max-aspect-ratio: 16/9){
            #videobg{
              width: auto;
              height: 100%;
            }
          }

          @media (max-width: 767px){
            #videobg{
              display: none;
            }
          }
          @media (min-width: 767px){
            #imgbg{
              display: none;
            }
          }

        </style>
        
        <div class="text-content">
            
            <h5>AIRAMPO SALTA</h5>
            <h6>Somos un desarrollo inmobiliario a orillas del Dique Cabra Corral, que ofrece un estilo de vida único. La combinación del paisaje, campo, agua y tranquilidad, lo convierten en el lugar ideal para aquellas personas que sepan encontrarle sentido a la vida a través de sus pasiones. </h6>
            

            <div class="row">
              <div class="col-md-3"></div>
              <div class= "col-md-6" style="margin-top: 20px">
                <form class="form-button">
                    <button type="submit" class="search-button">
                          <span class="fa fa-search"></span>  
                          {{-- <i class="fa fa-search"></i> --}}
                    </button>
                    <input type="search" value="" placeholder="Búsqueda" class="search-input" id="search-input">
                </form>

              </div>
              <div class="col-md-3"></div>
            </div>

        </div>
    </div>
  </div>
  <!-- // Item -->

</div>
<style>
  #about {
    padding: 80px 0px 0px 0px;
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
  
  @media (min-width: 480px) {
   .logomain{
        height:300px; padding: 50px;
    }
  }
  /* @media (max-width: 480px) {
    .logomain{
      height:150px; padding: 10px;
    }
  } */
  .form-button {
    border-radius: 50px;
    background: white;
    color: #5a6674;
    border: none;
    outline: none;
    height: 40px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .search-button {
    border: none;
    outline: none !important;
    width: fit-content;
    height: fit-content;
    cursor: pointer;
    background: transparent;
    margin-left: 8px;
  }
  .submit-button {
      width: 20px;
      height: 20px;
      outline: none;
  }
  .search-input {
      border: none;
      width: 200px;
      height: 20px;
      outline: none;
      font-size: 14px;
      color: #5a6674;
      background: transparent;
  }

  /* h1, h2, h3, h4, h5, h6 {
    text-shadow: 2px 2px #000;
  } */
  
</style>