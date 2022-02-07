
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Comunicate con Airampo!</h1>
            <span>Dejanos un mensaje</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <a href="https://api.whatsapp.com/send?phone=+5493874847460" target="_blank" style="display: block;">
            <div class="col-md-4">
              <div class="contact-item">
                <i class="fa fa-phone"></i>
                <h4>Teléfono</h4>
                <p>Llamanos</p>
                <a href="https://api.whatsapp.com/send?phone=+5493874847460" target="_blank">+54 9 387 484-7460</a>
              </div>
            </div>
          </a>
          
          <a href="mailto:ventas@airampo.com" style="display: block;">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Mandanos un mail</p>
              <a href="mailto:ventas@airampo.com">ventas@airampo.com</a>
            </div>
          </div>
          </a>
          
          
          <a href="#map" style="display: block;">
            <div class="col-md-4">
              <div class="contact-item">
                <i class="fa fa-map-marker"></i>
                <h4>Ubicación</h4>
                <p>Finca Piedras Moradas, Coronel Moldes - 
                  Salta - Argentina</p>
                <a href="#map">Ver Google Maps</a>
              </div>
            </div>
          </a>
          
        </div>
      </div>
    </div>

    @include('breez.sections.contact')
    {{-- form --}}

    {{-- gugle map --}}
    <div id="map" style=" margin-top: 10%;">

      
      <iframe src="https://maps.google.com/maps?q=airampo+salta=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    {{-- <div class="partners contact-partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <style>
      .contact-information .contact-item {
          padding: 60px 30px;
          background-color: #273c64;
          text-align: center;
      }
      .contact-item {
        margin-bottom: 30px;
      }
      .contact-information .contact-item i {
          color: #a4c639;
          font-size: 48px;
          margin-bottom: 40px;
      }
      .contact-information .contact-item a {
          font-weight: 600;
          color: #a4c639;
          font-size: 18px;
      }
    </style>