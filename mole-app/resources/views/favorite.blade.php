@extends('layouts.landing')

@section('content')
<div class="but-create">
    <a href="/favcreate">
        <button class="btn btn-success" type="submit">Add Favorite Heroes</button>
    </a>
</div>
<div class="fav-style">
<h2>Favorite Heroes &#11088;</h2>  
<p class="fw-light">These are some of the heroes that are often used by most players.</p>
</div>
<section class="sec-fav">
@foreach ($favorits as $favorit)
<div class="card" id="card-fav">
    <div class="card-body">
      <h5 class="card-title">{{$favorit->user->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Hero: {{$favorit->hero->name}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Date: {{$favorit->date}}</h6>
      <p class="card-text">{{$favorit->notes}}</p>
      <p class="card-text">{{$favorit->rating}} &#11088;</p>
    </div>
  </div>
  @endforeach   
</section>
  <hr>        
@endsection