<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    </head>
    <body>
      
    <nav class="navbar navbar-expand-lg navbar-light nav-color">
  <a class="navbar-brand" href="#">Bestshop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/homepage')}}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('/aboutpage')}}">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-catago" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        CATAGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Laptops</a>
          <a class="dropdown-item" href="#">Desktop</a>
          <a class="dropdown-item" href="#">Watchs</a>
          <a class="dropdown-item" href="#">Motor Bike</a>
          <a class="dropdown-item" href="#">Smart Phone</a>
          <a class="dropdown-item" href="#">Smart & Android Tv</a>
          <a class="dropdown-item" href="#">Speaker</a>
          <a class="dropdown-item" href="#">Headphone</a>
          <a class="dropdown-item" href="#">Refrigerator</a>
          <a class="dropdown-item" href="#">Split Ac</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline ">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>
</nav>

<div style="margin:10px;">
    @yield("content")

</div>

<div class="footer">
    <div class="address">
        <h2>Contact Us</h2>

        <p><i class="fa fa-map-marker" aria-hidden="true"></i>
          Road-18,Nikonjo-2,khilkhet,Dhaka,Bangladesh.<br>
          <i class="fa fa-phone" aria-hidden="true"></i>
          phone-01881401818<br>
          <i class="fa fa-clock-o" aria-hidden="true"></i> Anyday - 10AM To 10PM<br>
        <i class="fa fa-envelope-o" aria-hidden="true"></i> diptacompani12@gmail.com
      </p>
    </div>

    <div class="footer-menu">
        <h2>MENU</h2>

        <li><a href="">HOME</a></li>
        <li><a href="">CATALOG</a></li>
        <li><a href="">BLOG</a></li>
        <li><a href="">SHOP</a></li>
        <li><a href="">TOP10</a></li>
        <li><a href="">ADOUT</a></li>
        <li><a href="">NEWS FEED</a></li>
        <li><a href="">HELP</a></li>
    </div>
    <div class="footer-CATAGORIES">
        <h2>CATAGORIES</h2>
        <li><a href=""> Laptops </a></li>
        <li><a href=""> Watchs </a></li>
        <li><a href=""> Smart Phones</a></li>
        <li><a href=""> Speakers </a></li>
        <li><a href=""> Headphones </a></li>
        <li><a href=""> Refrigerators </a></li>
        <li><a href=""> Men Fashion </i></span></a></li>
        <li><a href=""> Women Fashion</a></li>
    </div>

    <div class="socail-app">
        <h2>SOCIAL MEDIA APPS</h2>
        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=new"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    </body>
</html>
