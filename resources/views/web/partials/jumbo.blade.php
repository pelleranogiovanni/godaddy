<div id="demo" class="carousel slide" data-ride="carousel" data-interval="4000">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/1.jpg')}}" alt="Los Angeles" style="height: 300px; width:500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/2.jpg')}}" alt="Chicago" style="height: 300px; width:500px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  <p></p>

</div>