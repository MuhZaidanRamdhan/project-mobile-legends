@extends('layouts.landing')

@section('content')
<section class="hero" id="about">
  <div class="container">
  <div class="text" data-aos="zoom-in" data-aos-duration="1000">
      Welcome to Website for Mobile Legends Lovers in Indonesia!
     </div>
     <div class="text-page">
      <p data-aos="zoom-in-down" data-aos-duration="1500">
        You can see a lot of knowledge about the history of heroes and what parts of these heroes! and many others that you can find out about <b class="text-secondary">Mobile Legends!</b> and here you can join our community, namely <b class="text-secondary">Mole Lovers!</b></p>
    </div>
     <div class="buttons">
        <a href="/about" class="btn btn-dark shadow-sm" data-aos="zoom-out-left" data-aos-duration="1500">Read More!</a>
        <a href="/register" class="btn btn-outline-secondary shadow-sm" data-aos="zoom-out-left" data-aos-duration="1500">Register</a>
      </div>
      <div class="text-header" data-aos="zoom-in-down" data-aos-duration="1500">
        <span class="text-center" style="color: #002D74;">You can see our social media here!</span>
        <div class="icons d-flex mt-2 justify-content-start">
          <img src="assets/img/icon_ig.svg" alt="icons" style="width: 30px;">
          <button class="button btn btn-light shadow-sm">
            <span class="text-center">Instagram</span>
          </button>
          <img src="assets/img/icon_tiktok.svg" alt="icons" style="width: 30px;">
          <button class="button btn btn-light shadow-sm">
            <span class="text-center">TikTok</span>  
          </button>                
          <img src="assets/img/icon_youtube.svg" alt="icons" style="width: 35px;">
          <button class="button btn btn-light shadow-sm">
            <span class="text-center">Youtube</span>  
          </button>
        </div>
      </div>  
  </div>
    <img src="assets/img/icon2.svg" alt="hero-img" style =" width:83%;" data-aos="zoom-in-down" data-aos-duration="1500">
</section>

<!--end-->
 
<!--features-->
<div class="title-section" id="features">
<h3>Featured Heroes &#11088;</h3>
<p class="features-paragraf">This is an example of the heroes that we provide on our website.</p>
</div>
<section class="section-card">
@foreach ($heroes as $hero)
<a href="/page/{{$hero->id}}">
    <div class="card shadow-sm" style=" width: 17rem; height: 25rem;">
      <img src="assets/img/{{$hero->poster}}" class="card-img-top" alt="..." height="100%"
        style="object-fit:1/1; background-size:cover; background-position:center; border-radius:2%" class="rounded-2">
      </div>
  </a>
@endforeach
</section>

<!--end-->

<!--fav hero-->
<section class="title-fav-L" id="FavoriteHeroes">
  <div class="container mt-5">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-4 text-center" data-aos="zoom-in-right" data-aos-duration="800" id="title-fav">
        <h2 style="text-align:center;">Favorite Heroes &#11088;</h2>  
        <p class="fw-light">These are some of the heroes that are often used by most players.</p>
      </div>
        <div class="col-md-8 d-flex justify-content-center items-center gap-5">
          @foreach ($favorits as $favorit)
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$favorit->user->name}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Hero: {{$favorit->hero->name}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Date: {{$favorit->date}}</h6>
                <p class="card-text">{{$favorit->notes}}</p>
              </div>
          </div>            
          @endforeach                
      </div>     
      </div>             
    </div>
  </div>      
</section>
@endsection
