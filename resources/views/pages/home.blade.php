@extends('layouts.main')

@section('content')
<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative overflow-hidden" style="
    background-blend-mode: multiply;
    background-image: url('{{ asset('img/woman_sorting.00d8e69.png') }}'),linear-gradient(rgb(50 139 48),rgb(126 190 38));
    background-repeat: no-repeat;
">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4"><b>RECYCLE NOW FOR A BETTER TOMORROW</b></h1>
                </div>
                <!-- End Title & Description -->
            </div>
        </div>

        <!-- Background Shape -->
        <figure class="position-absolute top-0 start-0 w-65">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
                <g opacity=".4">
                    <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078"
                        y1="1.7251" x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
                        <stop offset="0.4976" style="stop-color:gulpLighten[#377dff,30]" />
                        <stop offset="1" style="stop-color:#377dff" />
                    </linearGradient>
                    <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   " />
                    <linearGradient id="doubleEllipseTopLeftID2" gradientUnits="userSpaceOnUse" x1="1717.1648"
                        y1="3.779560e-05" x2="1717.1648" y2="644.0417" gradientTransform="matrix(-1 0 0 1 2600 0)">
                        <stop offset="1.577052e-06" style="stop-color:gulpLighten[#377dff,30]" />
                        <stop offset="1" style="stop-color:#377dff" />
                    </linearGradient>
                    <polygon fill="url(#doubleEllipseTopLeftID2)" points="519.7,0 1039.4,0.6 1246,639.1 725.2,644   " />
                </g>
            </svg> --}}
        </figure>
        <!-- End Background Shape -->

        <!-- Shape -->
        <div class="shape shape-bottom zi-1" style="margin-bottom: -.125rem">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
            </svg>
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Hero -->

    <!-- Features -->
    <div class="container content-space-2 content-space-lg-3">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-9 mb-lg-0">
                <div class="mb-3">
                    <h2 class="h1">Recycle Now For a Better Tomorrow</h2>
                </div>
                <p>Top Point Recyclers is a for-profit company that runs an incentive-based recycling program, focusing on PET plastic waste. They recycle and export products globally, serving clients in Nigeria's manufacturing industry while also creating jobs and empowering local youth and women.</p>
                <div class="mt-4">
                    <a class="btn btn-primary btn-transition px-5" href="{{ route('contact') }}" style="background-color: #1c7b33 !important;">Get in touch</a>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-lg-6 col-xl-5">
                <!-- SVG Element -->
                <div class="position-relative mx-auto" style="max-width: 28rem; min-height: 30rem;">
                    <figure class="position-absolute top-0 end-0 zi-2 me-10" data-aos="fade-up">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 450 450" width="165"
                            height="165">
                            <g>
                                <defs>
                                    <path id="circleImgID2" d="M225,448.7L225,448.7C101.4,448.7,1.3,348.5,1.3,225l0,0C1.2,101.4,101.4,1.3,225,1.3l0,0
                      c123.6,0,223.7,100.2,223.7,223.7l0,0C448.7,348.6,348.5,448.7,225,448.7z" />
                                </defs>
                                <clipPath id="circleImgID1">
                                    <use xlink:href="#circleImgID2" />
                                </clipPath>
                                <g clip-path="url(#circleImgID1)">
                                    <image width="450" height="450" xlink:href="{{ asset('img/Where-Does-Plastic-Recycling-Go.jpg') }}"></image>
                                </g>
                            </g>
                        </svg>
                    </figure>

                    <figure class="position-absolute top-0 start-0" data-aos="fade-up" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120"
                            height="120">
                            <circle fill="none" stroke="#377dff" stroke-width="75" cx="167.6" cy="167.6" r="130.1" />
                        </svg>
                    </figure>

                    <figure class="d-none d-sm-block position-absolute top-0 start-0 mt-10" data-aos="fade-up"
                        data-aos-delay="200">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 515 515" width="200"
                            height="200">
                            <g>
                                <defs>
                                    <path id="circleImgID4" d="M260,515h-5C114.2,515,0,400.8,0,260v-5C0,114.2,114.2,0,255,0h5c140.8,0,255,114.2,255,255v5
                      C515,400.9,400.8,515,260,515z" />
                                </defs>
                                <clipPath id="circleImgID3">
                                    <use xlink:href="#circleImgID4" />
                                </clipPath>
                                <g clip-path="url(#circleImgID3)">
                                    <image width="515" height="515" xlink:href="{{ asset('img/image-11.jpg') }}"
                                        transform="matrix(1 0 0 1 1.639390e-02 2.880859e-02)"></image>
                                </g>
                            </g>
                        </svg>
                    </figure>

                    <figure class="position-absolute top-0 end-0" style="margin-top: 11rem; margin-right: 13rem;"
                        data-aos="fade-up" data-aos-delay="250">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 67 67" width="25"
                            height="25">
                            <circle fill="#00C9A7" cx="33.5" cy="33.5" r="33.5" />
                        </svg>
                    </figure>

                    <figure class="position-absolute top-0 end-0 me-3" style="margin-top: 8rem;" data-aos="fade-up"
                        data-aos-delay="350">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 141 141" width="50"
                            height="50">
                            <circle fill="#FFC107" cx="70.5" cy="70.5" r="70.5" />
                        </svg>
                    </figure>

                    <figure class="position-absolute bottom-0 end-0" data-aos="fade-up" data-aos-delay="400">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 770.4 770.4" width="280"
                            height="280">
                            <g>
                                <defs>
                                    <path id="circleImgID6" d="M385.2,770.4L385.2,770.4c212.7,0,385.2-172.5,385.2-385.2l0,0C770.4,172.5,597.9,0,385.2,0l0,0
                      C172.5,0,0,172.5,0,385.2l0,0C0,597.9,172.4,770.4,385.2,770.4z" />
                                </defs>
                                <clipPath id="circleImgID5">
                                    <use xlink:href="#circleImgID6" />
                                </clipPath>
                                <g clip-path="url(#circleImgID5)">
                                    <image width="900" height="900" xlink:href="{{ asset('img/recycle-bail.png') }}"
                                        transform="matrix(1 0 0 1 -64.8123 -64.8055)"></image>
                                </g>
                            </g>
                        </svg>
                    </figure>
                </div>
                <!-- End SVG Element -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Features -->

    <div class="position-relative mt-5">
      <div class="container content-space-lg-3">
        <div class="row align-items-center">
          <div class="col-12 col-lg-9 mb-7 mb-md-0">
            <!-- Heading -->
            <div class="w-md-65 mb-7">
              <h2 class="h1">Our Recycling Process</h2>
              <p>
                At Top Point Recyclers, we've streamlined our recycling process to make it easy for you to join us in our mission to protect the environment and reduce waste. Here's a step-by-step illustration of how it all works
              </p>
            </div>
            <!-- End Heading -->

            <div class="row">
              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">


                    </span>
                    <h4 class="card-title">People Dispose the Dirt</h4>
                    <p class="card-text">It all starts with you! You, our valued customers, play a crucial role in the recycling process. You responsibly dispose of recyclable materials such as paper, plastics, glass, and electronics. By making a conscious choice to separate recyclables from trash, you're taking the first step toward a cleaner, greener world.</p>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->

              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">


                    </span>
                    <h4 class="card-title">The Company Truck Carries</h4>
                    <p class="card-text">Once you've sorted your recyclables, our dedicated company trucks swing into action. They're specially equipped to collect your materials efficiently and safely. Our professional drivers ensure that your recyclables are handled with care and transported to our facility.</p>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->

              <div class="col-md-4">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">


                    </span>
                    <h4 class="card-title">Truck Delivers the Dirt to the Organization for Storage</h4>
                    <p class="card-text">At our state-of-the-art facility, your recyclables are received and sorted. We have dedicated storage areas for various types of materials, ensuring efficient organization and ease of access.</p>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <div class="banner-half-middle-x bg-img-start d-none d-md-block" style="background-image: url('{{ asset('img/00-03.png') }}');"></div>
    </div>

    <div class="container content-space-2 content-space-lg-3">
      <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="text-center">
            <small class="text-cap text-primary">— Total Operation </small>
            <h4 class="display-4">500,000</h4>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="text-center">
            <small class="text-cap text-primary">— Staffs</small>
            <h4 class="display-4">75%</h4>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4">
          <div class="text-center">
            <small class="text-cap text-primary">— Area of Operation</small>
            <h4 class="display-4">125,000</h4>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <div class="container content-space-2">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" href="#">
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="{{ asset('img/images (1).png') }}" alt="Logo">
              </div>
              <h3 class="card-title">Collection</h3>
              <p class="card-text text-body">To collect and treat used objects and materials that are ready to be thrown out in order to produce materials that can be used again.</p>
            </div>

          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" href="#">
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="{{ asset('img/images.png') }}" alt="Logo">
              </div>
              <h3 class="card-title">Sort</h3>
              <p class="card-text text-body">The best scripts alternative and quick reports for the whole team.</p>
            </div>

          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 col-lg-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" href="#">
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="{{ asset('img/download.jpg') }}" alt="Logo">
              </div>
              <h3 class="card-title">Bale</h3>
              <p class="card-text text-body">
                A waste baler can reduce a large volume of trash or recycling to a fraction of its original size
            </p>
            </div>

          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- Mockup -->
    <div class="shape-container mb-3">
        <div class="container">

            <div class="video-bg">
                <div class="js-video-bg video-bg-content" data-hs-video-bg-options="{
                     &quot;videoId&quot;: &quot;./assets/video/working-in-office&quot;
                   }" style="position: relative;">
                    <div class="hs-video-bg-video">
                        <video poster="" autoplay="" muted="" loop="">
                            <source src="./assets/video/working-in-office.mp4" type="video/mp4">
                            <source src="./assets/video/working-in-office.webm" type="video/webm">
                            <source src="./assets/video/working-in-office.ogv" type="video/ogg">
                            Your browser doesn't support HTML5 video.
                        </video>
                    </div>
                </div>

                <div class="video-bg-replacer-img" style="background-image: url(./assets/video/working-in-office.jpg);">
                </div>
            </div>
        </div>
    </div>
    <!-- End Mockup -->

   @include('pages._banner')


</main>
@endsection
