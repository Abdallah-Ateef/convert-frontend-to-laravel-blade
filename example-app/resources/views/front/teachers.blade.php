@extends('front.master')
@section('title','Theachers')
@section('teacher-active','active')
@section('content')
@include('front.layouts.sub-header',['pagename'=>'Our Teachers']) 
     <!-- Team Start -->
     <div class="container-fluid pt-5">
        <div class="container">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2">Our Teachers</span>
            </p>
            <h1 class="mb-4">Meet Our Teachers</h1>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-1.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Julia Smith</h4>
              <i>Music Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-2.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Jhon Doe</h4>
              <i>Language Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-3.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Mollie Ross</h4>
              <i>Dance Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-4.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Donald John</h4>
              <i>Art Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-4.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Julia Smith</h4>
              <i>Music Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-3.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Jhon Doe</h4>
              <i>Language Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-2.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Mollie Ross</h4>
              <i>Dance Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{asset('frontend')}}/img/team-1.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Donald John</h4>
              <i>Art Teacher</i>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->
  
      <!-- Testimonial Start -->
      <div class="container-fluid py-5">
        <div class="container p-0">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2">Testimonial</span>
            </p>
            <h1 class="mb-4">What Parents Say!</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="{{asset('frontend')}}/img/testimonial-1.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="{{asset('frontend')}}/img/testimonial-2.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="{{asset('frontend')}}/img/testimonial-3.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
            <div class="testimonial-item px-3">
              <div class="bg-light shadow-sm rounded mb-4 p-4">
                <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
                eirmod clita lorem. Dolor tempor ipsum clita
              </div>
              <div class="d-flex align-items-center">
                <img
                  class="rounded-circle"
                  src="{{asset('frontend')}}/img/testimonial-4.jpg"
                  style="width: 70px; height: 70px"
                  alt="Image"
                />
                <div class="pl-3">
                  <h5>Parent Name</h5>
                  <i>Profession</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

@endsection