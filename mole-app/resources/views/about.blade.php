@extends('layouts.landing')

@section('content')
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="w-100 pt-1 mb-5 text-right">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="get" class="modal-content modal-body border-0 p-0">
        <div class="input-group mb-2">
          <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ..." />
          <button type="submit" class="input-group-text bg-success text-light">
            <i class="fa fa-fw fa-search text-white"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <section class="bg- py-4" data-aos="zoom-in-down" data-aos-duration="800">
    <div class="container">
      <div class="row align-items-center py-5">
        <div class="col-md-8 text-dark" data-aos="zoom-in-down" data-aos-duration="1000">
          <h1>About Us</h1>
          <p>
          Mobile Legends is a popular mobile game developed and published by Moonton. The game belongs to the Multiplayer Online Battle Arena (MOBA) genre and is designed to be played on mobile devices such as smartphones and tablets.
          </p>
        </div>
        <div class="col-md-4">
          <img src="/assets/img/linglung.png" alt="About Heroes" id="img-about"/>
        </div>
      </div>
    </div>
  </section>

  <div style="text-align:center; display:flex; justify-content:center;margin:10rem 0;" data-aos="zoom-in-down" data-aos-duration="800">
  <div class="col-lg-6 mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Map Illustrations</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                    src="/assets/img/map.jpg" alt="...">
            </div>
            <p style="text-align: justify">This illustration depicts one of the maps in Mobile Legends called "Land of Dawn."
                 The map showcases a vast battlefield with various lanes and interesting features.
             <br><br>
             In the center of the image, there is a main lane that connects the blue team's base on the left to the red team's base on the right.
            This lane is known as the "Mid Lane" and often serves as the primary battleground in the game. 
            <br><br>
            On the left side of the image, there is a lane known as the "Top Lane." This lane stretches from the blue team's base to the enemy territory on the right. 
            Along this lane, there are defense towers that both teams must pass to reach the enemy's base. 
            <br><br>
            On the right side of the image, there is a lane known as the "Bottom Lane." This lane also stretches from the blue team's base to the red team's base
            but passes through a different area compared to the Top Lane. Defense towers are also present along this lane.
            <br><br>
            In addition to the main lanes, there are other features that influence gameplay strategies. 
            There are forests located on the left and right sides of the map. These forests serve as hiding places for monsters that 
            players can defeat to gain additional advantages such as gold, XP, and buffs. Furthermore, there is a river that divides the map. 
            The river provides tactical advantages such as natural barriers and the ability to evade enemies by swimming.
            <br><br>
            This illustration reflects the complexity of the map in Mobile Legends. Each lane and feature plays a crucial role in team strategies. Players must collaborate with their team to control these lanes, 
            secure defense towers, and utilize other features to gain an edge in battles.
            

        </div>
    </div>
  </div>
  </div>
  <!-- Close Banner -->

  <!-- Start Section -->
  <div class="col-lg-6 m-auto">
    <h1 style="text-align: center; margin-top:4rem;">Created By</h1>
    <p></p>
  </div>
  <div class="owner-body">
    <figure class="figure" data-aos="zoom-in-down" data-aos-duration="800">
      <img src="/assets/img/zaidan.jpg" id="img-owner" class="figure-img img-fluid rounded-circle" alt="...">
      <figcaption class="figure-caption">
        <h5>Muhammad Zaidan Ramdhan</h5>
        <span>Full Stack developer</span>
      </figcaption>
    </figure>
    <figure class="figure" data-aos="zoom-in-down" data-aos-duration="1200">
      <img src="/assets/img/azka.jpg"id="img-owner" class="figure-img img-fluid rounded-circle" alt="...">
      <figcaption class="figure-caption">
        <h5>Ahmad Azka Ridho</h5>
        <span>Backend</span>
      </figcaption>
    </figure>
    <figure class="figure" data-aos="zoom-in-down" data-aos-duration="1600">
      <img src="/assets/img/padil.jpg" id="img-owner" class="figure-img img-fluid rounded-circle" alt="...">
      <figcaption class="figure-caption">
        <h5>Muhammad Fadhillah</h5>
        <span>Frontend</span>
      </figcaption>
    </figure>
    <figure class="figure" data-aos="zoom-in-down" data-aos-duration="2000">
      <img src="/assets/img/rian.jpg"id="img-owner" class="figure-img img-fluid rounded-circle" alt="...">
      <figcaption class="figure-caption">
        <h5>Rian Satria</h5>
        <span>Frontend</span>
      </figcaption>
    </figure>
  </div>
  <!-- End Section -->

  <!-- Start Brands -->
-

           
      
@endsection
  <!--End Brands-->  
