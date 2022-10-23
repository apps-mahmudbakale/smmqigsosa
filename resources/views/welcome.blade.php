@extends('layouts.welcome')
@section('content')
    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <div class="slider-active-wrap owl-carousel text-center text-md-left">
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>Welcome</h2>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="#about-area" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>Welcome</h2>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="#about-area" class="btn btn-brand">our mission</a>
                                    <a href="" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            {{-- <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>Towards Advanced Computing </h2>
                                <!-- <p>Students of </p> -->
                                <div class="slider-btn">
                                    <a href="#about-area" class="btn btn-brand">our mission</a>
                                    <a href="about.html" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End --> --}}
        </div>

    </section>
    <!--== Slider Area End ==-->


    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="about-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto">
                        <div class="about-content-wrap">
                            <div class="section-title text-center text-lg-left">
                                <h2>Our Mission</h2>
                            </div>

                            <div class="about-thumb">
                                <img src="mission.png" alt="" class="img-fluid">
                            </div>
                            <!--
                        <h4>Through consistent and professional exposure</h4>
                        <p>A study of NACOS activities indicates that it reveals IT career and entrepreneurship opportunities to the youth of Nigeria. </p>
                        <p>We aim <br> -->
                            <ul style="list-style-type:disc; text-align:justify;margin-left:4%;">
                                <li> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, vel! Expedita praesentium voluptate, error impedit magnam id blanditiis mollitia facere ab nostrum, ea doloribus ut quia quas maiores minima aut?.</li>
                                <li> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum voluptatibus repudiandae ratione animi iusto tempore necessitatibus cupiditate, odit placeat quas nesciunt a ab et, omnis, dolor provident. Laborum, aut veniam.</li>
                                <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga placeat laudantium necessitatibus nulla tempora velit id ducimus, quidem libero voluptatum repellat temporibus architecto eligendi beatae alias recusandae, sunt odio.</li>
                            </ul>
                            </p>
                            <a href="" class="btn btn-brand about-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== About Area End ==-->
@endsection