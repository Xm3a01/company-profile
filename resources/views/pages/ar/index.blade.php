@extends('layouts.master')

@section('title', ' | الرئسيه')

@section('content')
<section class="home-slider owl-carousel" style="direction:ltr">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-6 text ftco-animate pl-md-5">
          <h1 class="mb-4">Base Construction <span>Build The Future</span></h1>
          <h3 class="subheading">A small river named Duden flows by their place and supplies it with the necessary regelialia</h3>
          <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Request A Quote</a></p>
        </div>
      </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-6 text ftco-animate pl-md-5">
          <h1 class="mb-4">We Turn Your <span>Vision Into Reality</span></h1>
          <h3 class="subheading">A small river named Duden flows by their place and supplies it with the necessary regelialia</h3>
          <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Request A Quote</a></p>
        </div>
      </div>
      </div>
    </div>
  </section>
<br><br>
  <section class="ftco-services ftco-no-pt">
          <div class="container">
              <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">المنتجات</span>
          <h2 class="mb-4">منتجات الشركه</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
              <div class="row">
        <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-hook"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading"><a href="#">Construction</a></h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-skyline"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading"><a href="#">House Renovation</a></h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-stairs"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading"><a href="#">Painting</a></h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-home"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading"><a href="#">Architecture Design</a></h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
          </div>
      </section>

    {{-- team --}}
      <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">فريق العمل</span>
           <h2 class="mb-4">فريق العمل لاحترافي</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
            </div>	
              <div class="row">
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/team-1.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Daren Wilson</h3>
                              <span class="position mb-2">Head Engineer</span>
                              <div class="faded">
                                  <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                      <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/team-2.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Warren Parker</h3>
                              <span class="position mb-2">Civil Engineer</span>
                              <div class="faded">
                                  <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                      <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/team-3.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Eva Gustavo</h3>
                              <span class="position mb-2">Engineer</span>
                              <div class="faded">
                                  <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                      <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                      <div class="staff">
                          <div class="img-wrap d-flex align-items-stretch">
                              <div class="img align-self-stretch" style="background-image: url(images/team-4.jpg);"></div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h3>Mike Henderson</h3>
                              <span class="position mb-2">Architect</span>
                              <div class="faded">
                                  <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                  <ul class="ftco-social text-center">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    {{-- projects --}}
      <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container-fluid p-0">
              <div class="row no-gutters justify-content-center mb-5 pb-2">
         <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">المشاريع</span>
          <h2 class="mb-4">مشاريع المستقبل</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
        </div>
          <div class="row no-gutters">
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Resedencial</span>
                          <h3><a href="project.html">Rose Villa House</a></h3>
                      </div>
                      <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="project">
                      <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                      <div class="text">
                          <span>Commercial</span>
                          <h3><a href="project.html">San Francisco Tower</a></h3>
                      </div>
                      <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="icon-expand"></span>
                      </a>
                  </div>
              </div>
          </div>
        </div>
     </section>

   <!-- numbers here -->
   @include('ar-parts._numbers')


  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row ftco-animate">
          <div class="col-xl-1 d-xl-block d-none"></div>
        <div class="col-md-6 col-lg-6 col-xl-7" style="direction:ltr;">
            <div class="heading-section ftco-animate mb-5">
                <span class="subheading">الاخبار</span>
              <h2 class="mb-4">اخر الاخبار</h2>
              <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap">
                <div class="text bg-light p-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Racky Henderson</p>
                  <span class="position">Farmer</span>
                </div>
                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text bg-light p-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Henry Dee</p>
                  <span class="position">Businessman</span>
                </div>
                <div class="user-img" style="background-image: url(images/person_2.jpg)">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text bg-light p-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Huff</p>
                  <span class="position">Students</span>
                </div>
                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text bg-light p-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Rodel Golez</p>
                  <span class="position">Striper</span>
                </div>
                <div class="user-img" style="background-image: url(images/person_4.jpg)">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text bg-light p-4">
                    <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Ken Bosh</p>
                  <span class="position">Manager</span>
                </div>
                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>
<br><br>
@stop

