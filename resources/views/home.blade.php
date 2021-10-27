@extends('layout.app')

@yield('title','Home')




@section('content')
<div class="container mt-5 p-5">
    <div class="row">


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdn.pocket-lint.com/r/s/1200x/assets/images/151442-cameras-feature-stunning-photos-from-the-national-sony-world-photography-awards-2020-image1-evuxphd3mr.jpg" alt="Los Angeles" class="d-block" style="width:90%;height:70%;">
        <div class="carousel-caption">
            <h3>Dhaka</h3>
            <p>We had such a great time in LA!</p>
            <a href=" /Product">
                <div class="btn btn-info">Go to Product</div>
            </a>
          </div>
    
    </div>
      <div class="carousel-item">
        <img src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111.jpg" alt="Chicago" class="d-block" style="width:90%;height:70%;">
        <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
            <a href=" /Product">
            <div class="btn btn-info">Go to Product</div>
        </a>
          </div>
    
    </div>
     
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  
  
</div>
</div>
@endsection