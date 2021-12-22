@extends('layout')
@section('content')
<section class="header pb-5" id="header">
    <div class="container-fluid">
      <div class="row height-max image-header

                align-items-center" style="background-image: url(images/jonathan.jpg);">
        <div class="col-12 h-info d-flex justify-content-center
                    align-items-center col-lg-6 img-section">

          <div class="sub-info ">
            <h1>What POWER <br> is About</h1>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              A pariatur recusandae maxime accusamus nam quaerat nulla tempora 
              sunt ex blanditiis ducimus error voluptas, neque illo alias eum. 
              Dolor, quod asperiores.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="slides">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="///home/rux/GYM/myproject/images/slide1.jpg" class="d-block w-30 mx-auto border-radius: 50%" alt="...">
                <div class="reviews">
                    <h1 class="clientname">Jackie Joyner-Kersee</h1>
                    <p class="review">
                        Age is no barrier. It's a limitation you put on your mind.<br>
                        </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="///home/rux/GYM/myproject/images/slide2.jpg" class="d-block w-30 mx-auto" alt="...">
                <div class="reviews">
                    <h1 class="clientname">Michael Jordan</h1>
                    <p class="review">
                        Some people want it to happen, some wish it would happen, others make it happen.<br>
                        
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="///home/rux/GYM/myproject/images/slide3.jpg" class="d-block w-30 mx-auto" alt="...">
                <div class="reviews">
                    <h1 class="clientname">Jim Rohn</h1>
                    <p class="review">
                        Discipline is the bridge between goals and accomplishment.<br>
                        
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><img src="///home/rux/GYM/myproject/images/prev.svg" class="navimg"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><img src="///home/rux/GYM/myproject/images/next.svg" class="navimg"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
  <!-- end of header -->
  <!-- about us section-->
  <section class=" py-5">
    <div class="container">
      <!-- img row -->
      <div class="row about-us">
        <div class="col-12 mx-auto col-lg-6 img-section my-3">
          <div class="">
            <img src="images/edgar-chaparro.png" alt="gyming" class="img-fluid" />
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center col-lg-6 img-section my-3">
          <div class="history__">
            <h1 class="pt-3">About Us</h1>
            <h4 class="pb-5">Know More About Our History</h4>
            <p>POWER is Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Delectus ipsa est ad doloremque temporibus quibusdam eius deleniti, 
              nostrum minima nam, aspernatur eaque, 
              iste sed numquam aliquam cum ut ratione accusantium.
            </p>
            <p>
              POWER is Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Dolorem quibusdam perspiciatis temporibus laudantium minima 
              dolorum commodi maiores quae magnam eius. 
              Quisquam beatae fugiat illo repudiandae id, 
              molestiae repellendus officiis aperiam.
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
              Natus iste deleniti corporis maxime excepturi 
              saepe impedit repudiandae magnam, tempora totam adipisci 
              deserunt molestiae placeat mollitia? 
              Eos molestiae odit assumenda fuga?
            </p>
          </div>
        </div>
        <!-- end of img row -->
      </div>
    </div>
  </section>
  <!-- end of about us section -->
  <!-- M n V section -->
  <section class="my-5 m-n-v py-5">
    <div class="container p-5">
      <!-- ...section title -->
      <div class="row">
        <div class="col d-flex flex-wrap justify-content-center my-5">
          <h2 class="font-weight-bolder align-items-center title">
            Our Vision & Mission
          </h2>
        </div>
      </div>
      <!-- End of section title -->
      <!-- img row -->
      <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center col-lg-6 img-section my-3">
          <div class="m-info p-5">
            <h4>Vision</h4>
            <p class="">POWER is Lorem ipsum, dolor 
              sit amet consectetur adipisicing elit. 
              Sunt recusandae dolore labore, facere illum velit qui 
              incidunt culpa asperiores eligendi praesentium expedita 
              commodi nihil reiciendis quae! A excepturi sit facilis?
            </p>

          </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center col-lg-6 img-section my-3">
          <div class="v-info p-5">
            <h4>Mission</h4>
            <p class="">POWER is Lorem ipsum, dolor 
              sit amet consectetur adipisicing elit. 
              Sunt recusandae dolore labore, facere illum velit qui 
              incidunt culpa asperiores eligendi praesentium expedita 
              commodi nihil reiciendis quae! A excepturi sit facilis?
            </p>
          </div>
        </div>
        <!-- end of img row -->
      </div>
    </div>
  </section>
  <!-- End of M n V section -->
  <!-- choose section -->
  <section class=" my-5">
    <div class="container">
      <!-- img row -->
      <div class="row choose">
        <div class="col-12 d-flex justify-content-center align-items-center col-lg-6 img-section my-3">
          <div>
            <h1 class="pt-3">Why Choose Us?</h1>
            <h4 class="pb-4">Know about our history</h4>
            <p>POWER is Lorem ipsum, dolor 
              sit amet consectetur adipisicing elit. 
              Sunt recusandae dolore labore, facere illum velit qui 
              incidunt culpa asperiores eligendi praesentium expedita 
              commodi nihil reiciendis quae! A excepturi sit facilis?
            </p>
          </div>
        </div>
        <div class="col-12 mx-auto col-lg-6 img-section py-5">
          <div class="">
            <img src="images/dane.jpg" alt="suites" class="img-fluid" />
          </div>
        </div>
        <!-- end of img row -->
      </div>
      <div class="row text-center  icon-text py-5">
        <div class="col-12 col-lg-2 col-half-offset py-2">
          <img src="images/bx_bx-calendar-heart.png" alt="calender">
          <p class=" p-5">Consultation</p>
        </div>
        <div class=" col-lg-2 col-half-offset py-2">
          <img src="images/cil_people.png" alt="people">
          <p class="p-5">Best Trainers</p>
        </div>
        <div class=" col-lg-2 col-half-offset py-2">
          <img src="images/bx_bx-time.png" alt="time">
          <p class=" p-5">2000 Working Hours</p>
        </div>
        <div class=" col-lg-2 col-half-offset py-2">
          <img src="images/carbon_thumbs-up.png" alt="thumbs-up">
          <p class=" p-5">1000 Success Stories</p>
        </div>
        <div class=" col-lg-2 col-half-offset py-2">
          <img src="images/bi_heart.png" alt="heart">
          <p class=" p-5">3500 Happy Clients</p>
        </div>
      </div>
    </div>
  </section>
@endsection