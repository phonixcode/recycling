@extends('layouts.main')

@section('content')
<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative overflow-hidden" style="
    background-blend-mode: multiply;
    background-image: url(/_nuxt/img/woman_sorting.00d8e69.png),linear-gradient(rgb(50 139 48),rgb(126 190 38));
    background-repeat: no-repeat;
">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4">TOP POINT RECYCLERS</h1>
                    {{-- <p class="lead text-white text-capitalize mb-4">available to assist you in maximizing the value of
                        your recyclable materials.</p> --}}
                </div>
                <!-- End Title & Description -->

                {{-- <div class="d-grid d-sm-flex justify-content-center gap-2">
                    <a class="btn btn-light btn-transition px-6" href="{{ route('service') }}">Services</a>
                    <a class="btn text-white" href="{{ route('contact') }}">Get in touch <i
                            class="bi-chevron-right small ms-1"></i></a>
                </div> --}}
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
                    <h2 class="h1">Top Point Recyclers</h2>
                </div>

                <p>Top Point Recyclers is a waste recycling, social benefit, and for-profit company that promotes green environment. It operates an incentive-based program that gathers recyclable materials from post-consumers and recycles them.</p>

                <p>Individuals, the government, companies, and landfills account for the majority of the PET plastic garbage we manage.</p>

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
                                    <image width="450" height="450" xlink:href="{{ asset('img/pet4.jpg') }}"></image>
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
                                    <image width="515" height="515" xlink:href="{{ asset('img/pet3.jpg') }}"
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
                                    <image width="900" height="900" xlink:href="{{ asset('img/pet2.jpg') }}"
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

    <div class="bg-img-center" style="background-image: url(../assets/img/1920x800/img8.jpg);">
      <div class="container content-space-2 content-space-lg-3">
        <div class="w-md-65 w-lg-35">
          <div class="mb-4">
            {{-- <h2 class="h1 text-white">Wear your pride</h2> --}}
            <p class="text-white">Outdo the sun and refresh your workout with greys, whites and dark brights.</p>
          </div>
          {{-- <a class="btn btn-light btn-transition rounded-pill" href="#">Shop the collection</a> --}}
        </div>
      </div>
    </div>

    <div class="container content-space-2">
      {{-- <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="text-cap">Platforms</span>
        <h2 class="h1">Three platforms – handled by one tool</h2>
      </div>
      <!-- End Heading --> --}}

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" href="#">
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="{{ asset('img/download.jpg') }}" alt="Logo">
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
                <img class="avatar" src="{{ asset('img/images (1).png') }}" alt="Logo">
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

    <div class="container content-space-b-2 content-space-b-lg-3">
      <div class="w-lg-75 mx-lg-auto">
        <div class="row">
          <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="text-center">
              <h5 class="h1">500+</h5>
              <p>Total Operation</p>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="text-center">
              <h5 class="h1">50+</h5>
              <p>Staffs</p>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-4">
            <div class="text-center">
              <h5 class="h1">30</h5>
              <p>Area of Operation</p>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
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

        <!-- Shape -->
        {{-- <div class="shape shape-bottom zi-3">
            <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 500H3000V0L0 500Z" fill="#fff" />
            </svg>
        </div> --}}
        <!-- End Shape -->
    </div>
    <!-- End Mockup -->

    <div class="bg-img-center" style="background-image: url(../assets/img/1920x800/img8.jpg);">
      <div class="container content-space-2 content-space-lg-3">
        <div class="w-md-65 w-lg-35">
          <div class="mb-4">
            {{-- <h2 class="h1 text-white">Wear your pride</h2> --}}
            <p class="text-white">
                Our crew makes sure that every piece of recyclable plastic we gather is of the highest caliber. The recycled plastic that we collect and sell is of consistently high quality thanks to our best practices and stringent quality control. Our sales team collaborates with companies in Nigeria and beyond to deliver the best recyclable goods at affordable pricing.
            </p>
          </div>
          {{-- <a class="btn btn-light btn-transition rounded-pill" href="#">Shop the collection</a> --}}
        </div>
      </div>
    </div>

    {{-- <div class="overflow-hidden">
        <div class="container content-space-b-2">
            <div class="position-relative">
                <div class="bg-light text-center rounded-2 p-4 p-md-7">

                   <span>
                    Our crew makes sure that every piece of recyclable plastic we gather is of the highest caliber. The recycled plastic that we collect and sell is of consistently high quality thanks to our best practices and stringent quality control. Our sales team collaborates with companies in Nigeria and beyond to deliver the best recyclable goods at affordable pricing.
                   </span>
                </div>


            </div>
        </div>
    </div> --}}

</main>
@endsection
