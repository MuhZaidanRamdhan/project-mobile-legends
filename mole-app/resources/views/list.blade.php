@extends('layouts.landing')

@section('content')
<section class="wrapper">
    <div class="container-fostrap">
            <div class="title-section">
                <h3 id="features">List Heroes &#11088;</h3>
                <p class="features-paragraf">This is an example of the heroes that we provide on our website.</p>
            </div>
        <section class="section-card">
            @foreach ($list_heroes as $list_hero)
            <a href="/page/{{$list_hero->id}}">
                <div class="card shadow-sm" style=" width: 17rem; height: 25rem;" data-aos="zoom-in" data-aos-duration="1200">
                  <img src="assets/img/{{$list_hero->poster}}" class="card-img-top" alt="..." height="100%"
                    style="object-fit:1/1; background-size:cover; background-position:center; border-radius:2%" class="rounded-2">
                  </div>
              </a>
            @endforeach
        </section>
    </div>
</section>
@endsection