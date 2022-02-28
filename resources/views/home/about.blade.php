@extends('layout')
@section('content')
    <section class="header pb-5" id="header">
        <div class="container-fluid">
            <div class="row height-max image-header
                align-items-center" style="background-image: url(/images/jonathan.jpg);">
                <div class="col-12 h-info d-flex justify-content-center
                    align-items-center col-lg-6 img-section" style="margin-right:900px;">
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
                    <div class="carousel-item-img">
                        <img src="/images/slide1.jpg" class="d-block w-30 mx-auto" alt="...">
                    </div>
                    <div class="reviews">
                        <h1 class="clientname">Jackie Joyner-Kersee</h1>
                        <p class="review">
                            Age is no barrier. It's a limitation you put on your mind.<br>
                        </p>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="carousel-item-img">
                        <img src="/images/slide2.jpg" class="d-block w-30 mx-auto" alt="...">
                    </div>
                    <div class="reviews">
                        <h1 class="clientname">Michael Jordan</h1>
                        <p class="review">
                            Some people want it to happen, some wish it would happen, others make it happen.<br>
                        </p>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="carousel-item-img">
                        <img src="/images/slide3.jpg" class="d-block w-30 mx-auto" alt="...">
                    </div>
                    <div class="reviews">
                        <h1 class="clientname">Jim Rohn</h1>
                        <p class="review">
                            Discipline is the bridge between goals and accomplishment.<br>
                        </p>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><img src="/images/prev.svg" class="navimg"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><img src="/images/next.svg" class="navimg"></span>
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
                        <img src="/images/edgar-chaparro.png" alt="gyming" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center col-lg-6 img-section my-3">
                    <div class="history__">
                        <h1 class="pt-3">About Us</h1>
                        <p>POWER is an ultra-modern unisex fitness center with the best amenities
                            and training equipment. We offer a wide range of classes and exercising programs, tailored
                            to improve stamina and fitness goals of each gym member, individually and at any level.
                        </p>
                        <p>
                            Trainers at POWER meet the highest standards
                            expertise in all training programs.

                            We aim to give a system in which everyone is respected and to provide a unique and enjoyable
                            environment in which everyone can feel comfortable. POWER enables everyone to
                            work and produce excellence. From the staff to the clients involved in the gym it is all
                            about working for the greater good.
                        </p>
                        <p>
                            Members at POWER can each select a
                            trainer, training program and a membership option by choice and personal preferences.

                            You would like to improve your fitness level, to surpass your professional athlete goals, or
                            you would like either to continue with your recreational fitness routine or start off as a
                            beginner? This sport facility is the right place for your productive workout and tangible
                            exercising results. At POWER any form of discrimination, harassment or
                            prejudice is not tolerated. Here we welcome both male and female members.
                        </p>
                        <p>
                            Find us on the street at 125/3 S.Lincoln St. Washington DC.
                            Within the premises, you can find the gym, a cross fit gym and a group workout room, locker
                            rooms, showers and a café. POWER has got its own parking available for 100
                            cars. We have 24/7 video surveillance, and our members are provided with bar coded ID cards
                            and free Wi-Fi.
                        </p>
                    </div>
                </div>
                <!-- end of img row -->
            </div>
        </div>
    </section>
    <!-- end of about us section -->
    <!-- choose section -->
    <section class=" my-5">
        <div class="container">
            <!-- img row -->
            <div class="row choose">
                <div class="col-12 d-flex justify-content-center align-items-center col-lg-6 img-section my-3">
                    <div>
                        <h1 class="pt-3">Why Choose Us?</h1>
                        <p>POWER is a dynamic and diverse gym with a variety of group classes for every fitness
                            level and different interests, guided by the trainers who are to answer the gym members
                            needs at any time.
                        </p>
                    </div>
                </div>
                <div class="col-12 mx-auto col-lg-6 img-section py-5">
                    <div class="">
                        <img src="/images/dane.jpg" alt="suites" class="img-fluid"/>
                    </div>
                </div>
                <!-- end of img row -->
            </div>
            <div class="row text-center  icon-text py-5">
                <div class="col-12 col-lg-2 col-half-offset py-2">
                    <img src="/images/bx_bx-calendar-heart.png" alt="calender">
                    <p class=" p-5">Consultation</p>
                </div>
                <div class=" col-lg-2 col-half-offset py-2">
                    <img src="/images/cil_people.png" alt="people">
                    <p class="p-5">Best Trainers</p>
                </div>
                <div class=" col-lg-2 col-half-offset py-2">
                    <img src="/images/bx_bx-time.png" alt="time">
                    <p class=" p-5">2000 Working Hours</p>
                </div>
                <div class=" col-lg-2 col-half-offset py-2">
                    <img src="/images/carbon_thumbs-up.png" alt="thumbs-up">
                    <p class=" p-5">1000 Success Stories</p>
                </div>
                <div class=" col-lg-2 col-half-offset py-2">
                    <img src="/images/bi_heart.png" alt="heart">
                    <p class=" p-5">3500 Happy Clients</p>
                </div>
            </div>
        </div>
    </section>
@endsection
