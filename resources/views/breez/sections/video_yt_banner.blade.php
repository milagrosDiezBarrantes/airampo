<div class="Modern-Slider">

  <!-- Item -->
  <div class="item">
    <div class="img-fill">
        
        
        {{-- <img id="imgbg" class="imgbckgnd" src="{{ asset('airampo/img/galleria/Airampo Junio 2021-169.jpg') }}"> --}}
        <div class="video-background">
          <div class="video-foreground">
            <iframe 
            {{-- width="100%" height="315" --}}
             src="https://www.youtube.com/embed/4EA3FcIhYmo?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=4EA3FcIhYmo&mute=1" 
              frameborder="0" 
              allowfullscreen
              allow="autoplay">
            </iframe>
          </div>
        </div>

        
        {{-- none displayed --}}
        <div class="text-content" style="display: none">         
            
            <div class="row">
              <div class="col-md-3"></div>
              <div class= "col-md-6" style="margin-top: 20px">
                <form class="form-button">
                    <button type="submit" class="search-button">
                          <span class="fa fa-search"></span>  
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
  .video-background {
    background: #000;
    position: fixed;
    top: 0; right: 0; bottom: 0; left: 0;
    z-index: -99;
  }
  .video-foreground,
  .video-background iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }
</style>

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

    /* buscador form button*/
    top: 70%;   
    transform: translate(-50%, -1%);
  }
  
  
  @media (min-width: 480px) {
   .logomain{
        height:300px; padding: 50px;
    }
  }
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

  
</style>