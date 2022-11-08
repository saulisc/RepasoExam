@extends('template')

@section('contenido')

<h1> ola </h1>
<div class="container sm">

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <a href="https://www.eminem.com/news/gallery-rock-roll-hall-fame-induction-ceremony">
            <img src="https://www.eminem.com/sites/g/files/aaj4806/f/styles/suzuki_breakpoints_image_desktop-sm_2x_10x3/public/news/202211/2.%20rh-min.jpg?itok=Qlu7jTsL" class="d-block w-100" alt="Eminem's GOAT"></a>
            <div class="carousel-caption d-none d-md-block text-white">
              <h5>Rock & Roll Hall of Fame</h5>
              <p>GALLERY: ROCK & ROLL HALL OF FAME INDUCTION CEREMONY</p>
            </div>
            
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <a href="https://www.eminem.com/news/stream-now-curtain-call-2">
            <img src="https://www.eminem.com/sites/g/files/aaj4806/f/styles/suzuki_breakpoints_image_desktop-sm_5x3/public/news/202208/2.%20c2-min.jpg?itok=Q4Ibgn6v" class="d-block w-100" alt="Eminem's music"></a>
            <div class="carousel-caption d-none d-md-block text-white">
              <h5>STREAM NOW: EMINEM</h5>
              <p>Eminem's second greatest hits collection is out now!</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="https://www.eminem.com/news/eminem-show-20th-anniversary-merch-out-now-0">
            <img src="https://www.eminem.com/sites/g/files/aaj4806/f/styles/suzuki_breakpoints_image_desktop-sm_2x_10x3/public/news/202210/2.%20launch-min.jpg?itok=Kx35YAKA" class="d-block w-100" alt="Eminem's merch"></a>
            <div class="carousel-caption d-none d-md-block text-whitex">
              <h5>ANNIVERSARY MERCH OUT NOW</h5>
              <p>THE EMINEM SHOW 20TH ANNIVERSARY MERCH OUT NOW</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</div>

@stop