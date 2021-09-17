@extends("headerfooter")
@section("content")
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.mspstudio.co.uk/wp-content/uploads/2016/07/Sneakers_Magazine_Spread_2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.ytimg.com/vi/ETsekJKsr3M/maxresdefault.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.yourcamerastory.com/wp-content/uploads/2019/07/product-photo-styling.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row row-cols-1 row-cols-md-6">
    @for($i=0;$i<=5;$i++)
  <div class="col mb-4">
    <div class="card" style="width: 13rem;">
      <img src="https://5.imimg.com/data5/QD/KJ/TL/SELLER-51819885/white-background-product-photoshoot-services-500x500.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Headphone </h5>
        <p class="card-text">ATH-ANC700BT</p>
        <h5 class="card-text">৳-4,000 </h5>
      </div>
    </div>
  </div>
  @endfor
</div>

@endsection



