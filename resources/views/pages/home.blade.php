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
                    <p class="lead text-white text-capitalize mb-4">available to assist you in maximizing the value of
                        your recyclable materials.</p>
                </div>
                <!-- End Title & Description -->

                <div class="d-grid d-sm-flex justify-content-center gap-2">
                    <a class="btn btn-light btn-transition px-6" href="{{ route('service') }}">Services</a>
                    <a class="btn text-white" href="{{ route('contact') }}">Get in touch <i
                            class="bi-chevron-right small ms-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Background Shape -->
        <figure class="position-absolute top-0 start-0 w-65">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
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
                    <h2 class="h1">Top Point Recyclers</h2>
                </div>

                <p>Top Point Recyclers is a waste recycling, social benefit, and for-profit company that promotes green environment. It operates an incentive-based program that gathers recyclable materials from post-consumers and recycles them.</p>

                <p>Individuals, the government, companies, and landfills account for the majority of the PET plastic garbage we manage.</p>

                <div class="mt-4">
                    <a class="btn btn-primary btn-transition px-5" href="{{ route('contact') }}">Get in touch</a>
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

    <div class="container mb-3">
        <!-- Heading -->

        <!-- End Heading -->

        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-transition bg-light h-100 shadow-none overflow-hidden" href="#">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <div class="card-body">
                                <h4 class="card-title">COLLECTION</h4>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-2 bg-img-end h-100 px-0"
                            style=""></div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-transition bg-light h-100 shadow-none overflow-hidden" href="#">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <div class="card-body">
                                <h4 class="card-title">RE-PROCESS </h4>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-2 bg-img-end h-100 px-0"
                            style=""></div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4">
                <!-- Card -->
                <a class="card card-transition bg-light h-100 shadow-none overflow-hidden" href="#">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <div class="card-body">
                                <h4 class="card-title">RECYCLE</h4>
                            </div>
                        </div>
                        <div class="col-2 bg-img-end h-100 px-0"
                            style=""></div>
                    </div>
                    <!-- End Row -->
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>

    <div class="overflow-hidden">
        <div class="container position-relative content-space-2 content-space-t-lg-3">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="text-cap">Our Capabilities</span>
                <h2>We invest heavily in our recycling assets, and we take pride in providing a high-quality service to
                    our customers.</h2>
            </div>
            <!-- End Heading -->

            <div class="row">
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                fill="#035A4B"></path>
                            <path
                                d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                fill="#035A4B"></path>
                        </svg>

                        </span>

                        <h4>SHREDDING</h4>
                        <p>
                            Shredding is the process of size-reducing materials to allow for further processing of the
                            material
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                    fill="#035A4B"></path>
                                <path
                                    d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4>GRINDING</h4>
                        <p>
                            Grinding is the process of size-reducing materials to very small pieces that can’t be done
                            by shredding alone
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                fill="#035A4B"></path>
                            <path
                                d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                fill="#035A4B"></path>
                        </svg>

                        </span>

                        <h4>DRYING</h4>
                        <p>
                            Drying is the process of removing the surface and internal moisture of materials to allow
                            for further processing
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                    fill="#035A4B"></path>
                                <path
                                    d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4>EXTRUDING</h4>
                        <p>Extrusion is the process of melting material in a certain form to allow it to be transformed
                            into another product</p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                    fill="#035A4B"></path>
                                <path
                                    d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4>PELLETIZING</h4>
                        <p>Pelletizing takes the melted material from the extrusion process and converts into pellets
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                    fill="#035A4B"></path>
                                <path
                                    d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4>FILTRATION</h4>
                        <p>Filtration is the process of removing contaminates in the extrusion process via filter media
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-md-4">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                    fill="#035A4B"></path>
                                <path
                                    d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4>CRYSTALLIZATION</h4>
                        <p>
                            Crystallization is the process of aligning the polymer chains to allow for further
                            processing like drying
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-md-4">
                    <!-- Icon Blocks -->
                    <div class="pe-lg-6">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M16 0.200012H4C1.8 0.200012 0 2.00001 0 4.20001V16.2C0 18.4 1.8 20.2 4 20.2H16C18.2 20.2 20 18.4 20 16.2V4.20001C20 2.00001 18.2 0.200012 16 0.200012ZM15 10.2C15 10.9 14.8 11.6 14.6 12.2H18V16.2C18 17.3 17.1 18.2 16 18.2H12V14.8C11.4 15.1 10.7 15.2 10 15.2C9.3 15.2 8.6 15 8 14.8V18.2H4C2.9 18.2 2 17.3 2 16.2V12.2H5.4C5.1 11.6 5 10.9 5 10.2C5 9.50001 5.2 8.80001 5.4 8.20001H2V4.20001C2 3.10001 2.9 2.20001 4 2.20001H8V5.60001C8.6 5.30001 9.3 5.20001 10 5.20001C10.7 5.20001 11.4 5.40001 12 5.60001V2.20001H16C17.1 2.20001 18 3.10001 18 4.20001V8.20001H14.6C14.8 8.80001 15 9.50001 15 10.2Z"
                                fill="#035A4B"></path>
                            <path
                                d="M12 1.40002C15.4 2.20002 18 4.80003 18.8 8.20003H14.6C14.1 7.00003 13.2 6.10003 12 5.60003V1.40002V1.40002ZM5.40001 8.20003C5.90001 7.00003 6.80001 6.10003 8.00001 5.60003V1.40002C4.60001 2.20002 2.00001 4.80003 1.20001 8.20003H5.40001ZM14.6 12.2C14.1 13.4 13.2 14.3 12 14.8V19C15.4 18.2 18 15.6 18.8 12.2H14.6V12.2ZM8.00001 14.8C6.80001 14.3 5.90001 13.4 5.40001 12.2H1.20001C2.00001 15.6 4.60001 18.2 8.00001 19V14.8V14.8Z"
                                fill="#035A4B"></path>
                        </svg>

                        </span>

                        <h4>IV ENHANCEMENT </h4>
                        <p>
                            IV Enhancement is the process of raising the intrinsic viscosity of PET to allow it to be
                            used in different applications
                        </p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- SVG Shape -->
            <figure class="position-absolute zi-n1" style="top: -35rem; left: 50rem; width: 62rem; height: 62rem;">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 260 260">
                    <circle fill="#e7eaf3" opacity=".7" cx="130" cy="130" r="130"></circle>
                </svg>
            </figure>
            <!-- End SVG Shape -->
        </div>
    </div>

    <!-- Mockup -->
    <div class="shape-container">
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
        <div class="shape shape-bottom zi-3">
            <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 500H3000V0L0 500Z" fill="#fff" />
            </svg>
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Mockup -->

    <div class="overflow-hidden">
        <div class="container content-space-b-2">
            <div class="position-relative">
                <div class="bg-light text-center rounded-2 p-4 p-md-7">

                   <span>Our team ensure that all the recyclable plastics we process are high quality.

                    Our best practices and strict quality control means that the processed recyclable plastic we
                    sell is a reliably high quality.

                    Our selling team work with businesses in the Nigeria and overseas to supply the best
                    recyclable commodities at competitive prices.

                    We sell regrind granules, powders and pellets, if you would like to discuss the supply of
                    recyclable plastic commodities contact us today.</span>
                </div>


            </div>
        </div>
    </div>

</main>
@endsection
