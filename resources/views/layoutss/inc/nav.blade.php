<section class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 text-center text-center text-md-left">
                <div>
                  <i class="fas fa-clock"></i> Opening Hours: Mon - Sat 8.00 - 18.00 </div>
            </div>
            <div class="col-md-4 col-sm-12 text-center text-center text-md-right greylinks">
              <span class="pr-3">Follow Us:</span>
                <a href="#" class="px-2" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="px-2" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="px-2" title="Google+"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="px-2" title="Youtube"></a>
            </div>
        </div>
    </div>
</section>
<section id="{{$backgroundImage}}" class="fix-background">
    <nav class="navbar navbar-expand-md navbar-light container text-center">
      <a class="navbar-brand w-25" href="/">
        <img src="{{asset('assets/img/logo/ALEXA.png')}}" class="img-fluid" alt="Logo Alexa">
      </a>
      <button class="navbar-toggler border-0 d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
@yield('content')
<footer class="footer">
  <div class="container-fluid p-5">
    <div class="row">
      <div class="col-md-4 mr-auto text-md-left text-center m-md-0 mb-2">
        <h4 class="font-weight-600">About Us</h4>
        <p class="w-md-75">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur expedita deleniti fugiat 
          quia placeat, soluta corrupti natus ut, aut id, doloremque atque quo ratione provident error illo earum optio minus?
        </p>
      </div>
      
    <div class="col-md-4 text-center m-md-0 mb-2">
      <div class="row">
        <div class="col-md-12 mb-5">
          <h4 class="font-weight-600">Follow Us on</h4>
          <div class="pt-1">
              <a href="#" class="" title="Facebook"><i class="fab fa-facebook fa-2x fa-fw"></i></a>
              <a href="#" class="px-2" title="Twitter"><i class="fab fa-twitter fa-2x fa-fw"></i></a>
              <a href="#" class="" title="Google+"><i class="fab fa-google-plus-g fa-2x fa-fw"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h4 class="font-weight-600">Get in touch with</h4>
          <div class="pt-1">
            <a class="pr-1" href="tel:+91 91736 36128"><i class="fas fa-phone fa-2x fa-fw"></i></a>
            <a class="pl-1" href="mailto:alexaindia121@gmail.com"><i class="fas fa-envelope fa-2x fa-fw"></i></a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 ml-auto text-md-right text-center m-md-0 mt-4">
      <h4 class="font-weight-600">Reach out</h4>
        <div id="footer-add">
          <p class="mb-0">20, Skyline Infra Hub, B/H Intas Pharma,</p>
          <p class="mb-0">Matoda Patiya, Changodar,  Sanand,</p>
          <p class="mb-0">Ahmedabad, Gujarat-382210</p>
        </div>
    </div>
    </div>
  </div>
</footer>
<section class="bottom-nav">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
              <div>
                <i class="fas fa-copyright"></i>
                Copyright {{date('Y')}} All Right Reserved By Alexa Pharmaceuticals | Website Design & Developed by Mudit
              </div>
          </div>
      </div>
  </div>
</section>