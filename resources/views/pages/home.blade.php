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

    <div class="bg-img-center" style="background-color: #ced2ce;height: 391px;">
      <div class="container content-space-2 content-space-lg-3">
        <div class="w-md-60 ">
          <div class="" style="margin-top: 100px;">
            <p class="text-white">Outdo the sun and refresh your workout with greys, whites and dark brights.</p>
          </div>
          <div class="ml-4" style="margin-top: -20px;">
            <img src="{{ asset('img/00-truck-00.png') }}" alt="" width="500">
          </div>
        </div>
      </div>
    </div>

    <div class="position-relative mt-5">
      <div class="container content-space-lg-3">
        <div class="row align-items-center">
          <div class="col-12 col-lg-9 mb-7 mb-md-0">
            <!-- Heading -->
            <div class="w-md-65 mb-7">
              <h2 class="h1">Front helps you make better property decisions</h2>
              <p>Front has England's largest collection of street and suburb reviews, empowering you to find the right area for you to move to. With tens of thousands of local community topics and discussions, find the answers to all your questions about an area, or ask the locals.</p>
            </div>
            <!-- End Heading -->

            <div class="row">
              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card h-100">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3C5.67157 3 5 3.67157 5 4.5V6H3.5C2.67157 6 2 6.67157 2 7.5C2 8.32843 2.67157 9 3.5 9H5V19.5C5 20.3284 5.67157 21 6.5 21C7.32843 21 8 20.3284 8 19.5V9H20.5C21.3284 9 22 8.32843 22 7.5C22 6.67157 21.3284 6 20.5 6H8V4.5C8 3.67157 7.32843 3 6.5 3Z" fill="#035A4B"></path>
                      <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11H10V17.5C10 18.3284 10.6716 19 11.5 19H15.5C17.3546 19 19.0277 18.2233 20.2119 16.9775C20.1436 16.9922 20.0727 17 20 17C19.4477 17 19 16.5523 19 16V13C19 12.4477 19.4477 12 20 12C20.5523 12 21 12.4477 21 13V15.9657C21.6334 14.9626 22 13.7741 22 12.5C22 11.6716 21.3284 11 20.5 11Z" fill="#035A4B"></path>
                      </svg>

                    </span>
                    <h4 class="card-title">Find homes for sale</h4>
                    <p class="card-text">Over 1 million+ homes for sale available on the website.</p>
                    <a class="card-link" href="#">Properties for sale <i class="bi-chevron-right small ms-1"></i></a>
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
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="#035A4B"></path>
                      <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="#035A4B"></path>
                      </svg>

                    </span>
                    <h4 class="card-title">Find rental properties</h4>
                    <p class="card-text">Fina a home or apartment with 35+ filters and custom keyword search.</p>
                    <a class="card-link" href="#">Properties for rent <i class="bi-chevron-right small ms-1"></i></a>
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
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M18 22H6C5.4 22 5 21.6 5 21V8C6.6 6.4 7.4 5.6 9 4H15C16.6 5.6 17.4 6.4 19 8V21C19 21.6 18.6 22 18 22ZM12 5.5C11.2 5.5 10.5 6.2 10.5 7C10.5 7.8 11.2 8.5 12 8.5C12.8 8.5 13.5 7.8 13.5 7C13.5 6.2 12.8 5.5 12 5.5Z" fill="#035A4B"></path>
                      <path d="M12 7C11.4 7 11 6.6 11 6V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V6C13 6.6 12.6 7 12 7ZM15.1 10.6C15.1 10.5 15.1 10.4 15 10.3C14.9 10.2 14.8 10.2 14.7 10.2C14.6 10.2 14.5 10.2 14.4 10.3C14.3 10.4 14.3 10.5 14.2 10.6L9 19.1C8.9 19.2 8.89999 19.3 8.89999 19.4C8.89999 19.5 8.9 19.6 9 19.7C9.1 19.8 9.2 19.8 9.3 19.8C9.5 19.8 9.6 19.7 9.8 19.5L15 11.1C15 10.8 15.1 10.7 15.1 10.6ZM11 11.6C10.9 11.3 10.8 11.1 10.6 10.8C10.4 10.6 10.2 10.4 10 10.3C9.8 10.2 9.50001 10.1 9.10001 10.1C8.60001 10.1 8.3 10.2 8 10.4C7.7 10.6 7.49999 10.9 7.39999 11.2C7.29999 11.6 7.2 12 7.2 12.6C7.2 13.1 7.3 13.5 7.5 13.9C7.7 14.3 7.9 14.5 8.2 14.7C8.5 14.9 8.8 14.9 9.2 14.9C9.8 14.9 10.3 14.7 10.6 14.3C11 13.9 11.1 13.3 11.1 12.5C11.1 12.3 11.1 11.9 11 11.6ZM9.8 13.8C9.7 14.1 9.5 14.2 9.2 14.2C9 14.2 8.8 14.1 8.7 14C8.6 13.9 8.5 13.7 8.5 13.5C8.5 13.3 8.39999 13 8.39999 12.6C8.39999 12.2 8.4 11.9 8.5 11.7C8.5 11.5 8.6 11.3 8.7 11.2C8.8 11.1 9 11 9.2 11C9.5 11 9.7 11.1 9.8 11.4C9.9 11.7 10 12 10 12.6C10 13.2 9.9 13.6 9.8 13.8ZM16.5 16.1C16.4 15.8 16.3 15.6 16.1 15.4C15.9 15.2 15.7 15 15.5 14.9C15.3 14.8 15 14.7 14.6 14.7C13.9 14.7 13.4 14.9 13.1 15.3C12.8 15.7 12.6 16.3 12.6 17.1C12.6 17.6 12.7 18 12.9 18.4C13.1 18.7 13.3 19 13.6 19.2C13.9 19.4 14.2 19.5 14.6 19.5C15.2 19.5 15.7 19.3 16 18.9C16.4 18.5 16.5 17.9 16.5 17.1C16.7 16.8 16.6 16.4 16.5 16.1ZM15.3 18.4C15.2 18.7 15 18.8 14.7 18.8C14.4 18.8 14.2 18.7 14.1 18.4C14 18.1 13.9 17.7 13.9 17.2C13.9 16.8 13.9 16.5 14 16.3C14.1 16.1 14.1 15.9 14.2 15.8C14.3 15.7 14.5 15.6 14.7 15.6C15 15.6 15.2 15.7 15.3 16C15.4 16.2 15.5 16.6 15.5 17.2C15.5 17.7 15.4 18.1 15.3 18.4Z" fill="#035A4B"></path>
                      </svg>

                    </span>
                    <h4 class="card-title">Sell properties</h4>
                    <p class="card-text">Wanting to find a sold property price or see what sold on the weekend?</p>
                    <a class="card-link" href="#">Sell properties <i class="fas bi-chevron-right small ms-1"></i></a>
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

        <!-- Shape -->
        {{-- <div class="shape shape-bottom zi-3">
            <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 500H3000V0L0 500Z" fill="#fff" />
            </svg>
        </div> --}}
        <!-- End Shape -->
    </div>
    <!-- End Mockup -->

    <div class="bg-img-center" style="background-color: #ced2ce;height: 391px;">
      <div class="container content-space-2 content-space-lg-3">
        <div class="w-md-60 ">
          <div class="" style="margin-top: 100px;">
            <p class="text-white">Outdo the sun and refresh your workout with greys, whites and dark brights.</p>
          </div>
          <div class="ml-4" style="margin-top: -20px;">
            <img src="{{ asset('img/00-truck-00.png') }}" alt="" width="500">
          </div>
        </div>
      </div>
    </div>

    <style>
      .w-md-60 {
        display: flex;
        justify-content: space-between;
      }
    </style>


</main>
@endsection
