@extends('layouts.landing')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="/assets/img/{{$hero->poster}}" alt="..."  id="img-list"/></div>
            <div class="col-md-6" id="card-detail">
                <h1 class="display-5 fw-bolder">{{$hero->name}}</h1>
                <div class="fs-5 mb-2">
                    <span class="text-decoration-line-through"></span>
                    <span>{{$hero->role->name}}, {{$hero->special->name}}</span>
                </div>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through"></span>
                        <span>difficult: {{$hero->difficult->level}}</span>
                    </div>
                <p style="text-align: justify">
                    {{$hero->description}}
                </p>
            </div>
        </div>
    </div>
</section>

<div class="title-section">
    <h3 id="features">Another Heroes &#11088;</h3>
</div>
<section class="section-card">
    @foreach ($heroes as $hero)
    <a href="/page/{{$hero->id}}">
        <div class="card shadow-sm" style=" width: 17rem; height: 25rem;">
          <img src="/assets/img/{{$hero->poster}}" class="card-img-top" alt="..." height="100%"
            style="object-rasio:1/1; background-size:cover; background-position:center; border-radius:2%" class="rounded-2">
          </div>
      </a>
    @endforeach
</section>
@endsection