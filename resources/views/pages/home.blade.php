@extends('layouts.main')

@section('content')
<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative bg-primary overflow-hidden">
      <div class="container position-relative zi-2 content-space-3 content-space-md-5">
        <div class="w-md-75 w-xl-65 text-center mx-md-auto">
          <!-- Heading -->
          <div class="mb-7">
            <h1 class="display-4 text-white text-capitalize mb-4">TOP POINT RECYCLERS</h1>
            <p class="lead text-white text-capitalize mb-4">available to assist you in maximizing the value of your recyclable materials.</p>
          </div>
          <!-- End Title & Description -->

          <div class="d-grid d-sm-flex justify-content-center gap-2">
            <a class="btn btn-light btn-transition px-6" href="{{ route('recyclables-pick-up') }}">Services</a>
            <a class="btn text-white" href="{{ route('contact') }}">Get in touch <i class="bi-chevron-right small ms-1"></i></a>
          </div>
        </div>
      </div>

      <!-- Background Shape -->
      <figure class="position-absolute top-0 start-0 w-65">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
          <g opacity=".4">
            <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078" y1="1.7251" x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
              <stop offset="0.4976" style="stop-color:gulpLighten[#377dff,30]"/>
              <stop offset="1" style="stop-color:#377dff"/>
            </linearGradient>
            <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   "/>
            <linearGradient id="doubleEllipseTopLeftID2" gradientUnits="userSpaceOnUse" x1="1717.1648" y1="3.779560e-05" x2="1717.1648" y2="644.0417" gradientTransform="matrix(-1 0 0 1 2600 0)">
              <stop offset="1.577052e-06" style="stop-color:gulpLighten[#377dff,30]"/>
              <stop offset="1" style="stop-color:#377dff"/>
            </linearGradient>
            <polygon fill="url(#doubleEllipseTopLeftID2)" points="519.7,0 1039.4,0.6 1246,639.1 725.2,644   "/>
          </g>
        </svg>
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
            <h2 class="h1">Whatever work you do, use our design</h2>
          </div>

          <p>After brainstorming about insights, get the power to create something real. Bring your ideas to life and share your vision with concrete elements. Make collaboration and communication easier with your team or your client.</p>

          <p>Use our tools to explore your ideas and make your vision come true. Then share your work easily.</p>

          <div class="mt-4">
            <a class="btn btn-primary btn-transition px-5" href="#">Start Now</a>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-6 col-xl-5">
          <!-- SVG Element -->
          <div class="position-relative mx-auto" style="max-width: 28rem; min-height: 30rem;">
            <figure class="position-absolute top-0 end-0 zi-2 me-10" data-aos="fade-up">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 450 450" width="165" height="165">
                <g>
                  <defs>
                    <path id="circleImgID2" d="M225,448.7L225,448.7C101.4,448.7,1.3,348.5,1.3,225l0,0C1.2,101.4,101.4,1.3,225,1.3l0,0
                      c123.6,0,223.7,100.2,223.7,223.7l0,0C448.7,348.6,348.5,448.7,225,448.7z"/>
                  </defs>
                  <clipPath id="circleImgID1">
                    <use xlink:href="#circleImgID2"/>
                  </clipPath>
                  <g clip-path="url(#circleImgID1)">
                    <image width="450" height="450" xlink:href="./assets/img/450x450/img1.jpg" ></image>
                  </g>
                </g>
              </svg>
            </figure>

            <figure class="position-absolute top-0 start-0" data-aos="fade-up" data-aos-delay="300">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120" height="120">
                <circle fill="none" stroke="#377dff" stroke-width="75" cx="167.6" cy="167.6" r="130.1"/>
              </svg>
            </figure>

            <figure class="d-none d-sm-block position-absolute top-0 start-0 mt-10" data-aos="fade-up" data-aos-delay="200">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 515 515" width="200" height="200">
                <g>
                  <defs>
                    <path id="circleImgID4" d="M260,515h-5C114.2,515,0,400.8,0,260v-5C0,114.2,114.2,0,255,0h5c140.8,0,255,114.2,255,255v5
                      C515,400.9,400.8,515,260,515z"/>
                  </defs>
                  <clipPath id="circleImgID3">
                    <use xlink:href="#circleImgID4"/>
                  </clipPath>
                  <g clip-path="url(#circleImgID3)">
                    <image width="515" height="515" xlink:href="./assets/img/515x515/img1.jpg" transform="matrix(1 0 0 1 1.639390e-02 2.880859e-02)"></image>
                  </g>
                </g>
              </svg>
            </figure>

            <figure class="position-absolute top-0 end-0" style="margin-top: 11rem; margin-right: 13rem;" data-aos="fade-up" data-aos-delay="250">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 67 67" width="25" height="25">
                <circle fill="#00C9A7" cx="33.5" cy="33.5" r="33.5"/>
              </svg>
            </figure>

            <figure class="position-absolute top-0 end-0 me-3" style="margin-top: 8rem;" data-aos="fade-up" data-aos-delay="350">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 141 141" width="50" height="50">
                <circle fill="#FFC107" cx="70.5" cy="70.5" r="70.5"/>
              </svg>
            </figure>

            <figure class="position-absolute bottom-0 end-0" data-aos="fade-up" data-aos-delay="400">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 770.4 770.4" width="280" height="280">
                <g>
                  <defs>
                    <path id="circleImgID6" d="M385.2,770.4L385.2,770.4c212.7,0,385.2-172.5,385.2-385.2l0,0C770.4,172.5,597.9,0,385.2,0l0,0
                      C172.5,0,0,172.5,0,385.2l0,0C0,597.9,172.4,770.4,385.2,770.4z"/>
                  </defs>
                  <clipPath id="circleImgID5">
                    <use xlink:href="#circleImgID6"/>
                  </clipPath>
                  <g clip-path="url(#circleImgID5)">
                    <image width="900" height="900" xlink:href="./assets/img/900x900/img2.jpg" transform="matrix(1 0 0 1 -64.8123 -64.8055)"></image>
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


    <div class="overflow-hidden">
      <div class="container position-relative content-space-2 content-space-t-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
          <span class="text-cap">What we do?</span>
          <h2>Front makes designing easy and performance fast</h2>
        </div>
        <!-- End Heading -->

        <div class="row">
          <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
            <!-- Icon Blocks -->
            <div class="pe-lg-6">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.6 5.59998L20.9 10.9C21.3 11.3 21.3 11.9 20.9 12.3L17.6 15.6L11.6 9.59998L15.6 5.59998ZM2.3 12.3L7.59999 17.6L11.6 13.6L5.59999 7.59998L2.3 10.9C1.9 11.3 1.9 11.9 2.3 12.3Z" fill="#035A4B"></path>
                <path opacity="0.3" d="M17.6 15.6L12.3 20.9C11.9 21.3 11.3 21.3 10.9 20.9L7.59998 17.6L13.6 11.6L17.6 15.6ZM10.9 2.3L5.59998 7.6L9.59998 11.6L15.6 5.6L12.3 2.3C11.9 1.9 11.3 1.9 10.9 2.3Z" fill="#035A4B"></path>
                </svg>

              </span>

              <h4>More creativity</h4>
              <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
            <!-- Icon Blocks -->
            <div class="pe-lg-6">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z" fill="#035A4B"></path>
                <path d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z" fill="#035A4B"></path>
                </svg>

              </span>

              <h4>Scale budgets efficiently</h4>
              <p>Now that we've aligned the details, it's time to get things mapped out and organized.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
            <!-- Icon Blocks -->
            <div class="pe-lg-6">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128V12.9128Z" fill="#035A4B"></path>
                <path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607V10.9128Z" fill="#035A4B"></path>
                </svg>

              </span>

              <h4>Smart Dashboards</h4>
              <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
            <!-- Icon Blocks -->
            <div class="pe-lg-6">
              <span class="svg-icon text-primary mb-3">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z" fill="#035A4B"></path>
                <path d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z" fill="#035A4B"></path>
                </svg>

              </span>

              <h4>Control Center</h4>
              <p>Now that we've aligned the details, it's time to get things mapped out and organized.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
            <!-- Icon Blocks -->
            <div class="pe-lg-6">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725V8.725Z" fill="#035A4B"></path>
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="#035A4B"></path>
                </svg>

              </span>

              <h4>Email Reports</h4>
              <p>We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-md-4">
            <!-- Icon Blocks -->
            <div class="pe-lg-6">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M3 3V17H7V21H15V9H20V3H3Z" fill="#035A4B"></path>
                <path d="M20 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V21C21 21.6 20.6 22 20 22ZM19 4H4V8H19V4ZM6 18H4V20H6V18ZM6 14H4V16H6V14ZM6 10H4V12H6V10ZM10 18H8V20H10V18ZM10 14H8V16H10V14ZM10 10H8V12H10V10ZM14 18H12V20H14V18ZM14 14H12V16H14V14ZM14 10H12V12H14V10ZM19 14H17V20H19V14ZM19 10H17V12H19V10Z" fill="#035A4B"></path>
                </svg>

              </span>

              <h4>Forecasting</h4>
              <p>Staying focused allows us to turn every project we complete into something we love.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- SVG Shape -->
        <figure class="position-absolute zi-n1" style="top: -35rem; left: 50rem; width: 62rem; height: 62rem;">
          <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
            <circle fill="#e7eaf3" opacity=".7" cx="130" cy="130" r="130"></circle>
          </svg>
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>

    <!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">Read our latest news</h2>
        <p>We've helped some great companies brand, design and get to market.</p>
      </div>
      <!-- End Heading -->

      <div class="row gx-3 mb-5 mb-md-9">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img9.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Product</span>
              <h5 class="card-text lh-base">Better is when everything works together</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img10.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Business</span>
              <h5 class="card-text lh-base">What CFR really is about</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img11.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Business</span>
              <h5 class="card-text lh-base">Should Product Owners think like entrepreneurs?</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img12.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Facilitate</span>
              <h5 class="card-text lh-base">Announcing Front Strategies: Ready-to-use rules</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card Info -->
      <div class="text-center">
        <div class="card card-info-link card-sm">
          <div class="card-body">
            Want to read more? <a class="card-link ms-2" href="#">Go here <span class="bi-chevron-right small ms-1"></span></a>
          </div>
        </div>
      </div>
      <!-- End Card Info -->
    </div>
    <!-- End Card Grid -->

    <!-- Mockup -->
    <div class="shape-container">
      <div class="container">
        <!-- Heading -->
        <div class="w-md-75 text-center mx-md-auto mb-5 mb-md-9">
          <h2 class="h1">Ready to grow your business?</h2>
          <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
        </div>
        <!-- End Heading -->

        <!-- Devices -->
        <div class="devices">
          <!-- Mobile Device -->
          <figure class="device-mobile rotated-3d-right">
            <div class="device-mobile-frame">
              <img class="device-mobile-img" src="./assets/img/407x867/img5.jpg" alt="Image Description">
            </div>
          </figure>
          <!-- End Mobile Device -->

          <!-- Browser Device -->
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
            </div>

            <div class="device-browser-frame">
              <img class="device-browser-img" src="./assets/img/1618x1010/img1.jpg" alt="Image Description">
            </div>
          </figure>
          <!-- End Browser Device -->
        </div>
        <!-- End Devices -->
      </div>

      <!-- Shape -->
      <div class="shape shape-bottom zi-3">
        <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 500H3000V0L0 500Z" fill="#fff"/>
        </svg>
      </div>
      <!-- End Shape -->
    </div>
    <!-- End Mockup -->

    <!-- Clients -->
    <div class="container content-space-2 content-space-b-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
        <h2>Our Partners</h2>
      </div>
      <!-- End Heading -->

      <div class="row justify-content-center text-center">
        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/amazon-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/kaplan-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/google-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/airbnb-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/shopify-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/vidados-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/capsule-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/forbes-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/business-insider-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/hubspot-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/layar-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Clients -->
  </main>
@endsection
