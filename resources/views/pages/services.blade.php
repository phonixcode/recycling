@extends('layouts.main')

@section('content')
<main id="content" role="main">

    <div class="position-relative bg-primary overflow-hidden">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4">Services</h1>
                    <p class="lead text-white text-capitalize mb-4"></p>
                </div>
                <!-- End Title & Description -->
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

    <!-- Gallery -->
    <div class="container content-space-t-3 content-space-t-lg-5">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-md-9">
            <h1>Design-led and user-centric strategies can impact people's life.</h1>
        </div>
        <!-- End Heading -->

        <div class="row gx-3 gx-lg-4">
            <div class="col-5 align-self-end">
                <img class="img-fluid rounded-2" src="./assets/img/750x750/img6.jpg" alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="col-7">
                <div class="ms-lg-4">
                    <img class="img-fluid rounded-2" src="./assets/img/750x750/img1.jpg" alt="Image Description">
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Gallery -->

    <!-- Icon Blocks -->
    <div class="container content-space-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <span class="text-cap">What we do</span>
            <h2>Since 2007, we have helped 25 companies launch over 1k incredible products</h2>
        </div>
        <!-- End Heading -->

        <div class="row justify-content-lg-center">
            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="d-flex pe-md-5">
                    <div class="flex-shrink-0">
                        <div class="svg-icon text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M20.335 15.537C21.725 14.425 21.57 12.812 21.553 11.224C21.4407 9.50899 20.742 7.88483 19.574 6.624C18.5503 5.40102 17.2668 4.4216 15.817 3.757C14.4297 3.26981 12.9703 3.01966 11.5 3.01701C8.79576 2.83108 6.11997 3.66483 4 5.35398C2.289 6.72498 1.23101 9.12497 2.68601 11.089C3.22897 11.6881 3.93029 12.1214 4.709 12.339C5.44803 12.6142 6.24681 12.6888 7.024 12.555C6.88513 12.9965 6.85078 13.4644 6.92367 13.9215C6.99656 14.3786 7.17469 14.8125 7.444 15.189C7.73891 15.5299 8.10631 15.8006 8.51931 15.9812C8.93232 16.1619 9.38047 16.2478 9.831 16.233C10.0739 16.2296 10.3141 16.1807 10.539 16.089C10.7371 15.9871 10.9288 15.8732 11.113 15.748C12.1594 15.2831 13.3275 15.1668 14.445 15.416C15.7795 15.7213 17.1299 15.952 18.49 16.107C18.7927 16.1438 19.0993 16.1313 19.398 16.07C19.7445 15.9606 20.0639 15.7789 20.335 15.537V15.537Z"
                                    fill="#035A4B" />
                                <path
                                    d="M19.008 16.114C18.9486 16.6061 18.7934 17.0817 18.551 17.514C18.229 18.114 17.581 18.314 17.103 18.752C16.457 19.343 16.595 20.38 16.632 21.164C16.6522 21.3437 16.621 21.5254 16.542 21.688C16.4335 21.835 16.2751 21.9373 16.0965 21.9758C15.9179 22.0143 15.7314 21.9863 15.572 21.897C15.2577 21.7083 15.0072 21.4296 14.853 21.097C14.581 20.607 14.362 20.085 14.053 19.612C13.3182 18.7548 12.4201 18.0525 11.411 17.546C10.9334 17.1942 10.5857 16.6942 10.422 16.124C10.459 16.111 10.499 16.106 10.536 16.09C10.7336 15.9879 10.925 15.8741 11.109 15.749C12.1554 15.2842 13.3234 15.1678 14.441 15.417C15.7754 15.7223 17.1259 15.953 18.486 16.108C18.6598 16.1191 18.834 16.1211 19.008 16.114V16.114ZM18.8 10.278V3C18.8 2.73478 18.6946 2.48044 18.5071 2.29291C18.3196 2.10537 18.0652 2 17.8 2C17.5348 2 17.2804 2.10537 17.0929 2.29291C16.9053 2.48044 16.8 2.73478 16.8 3V10.278C16.4187 10.4981 16.1207 10.8379 15.9522 11.2447C15.7838 11.6514 15.7542 12.1024 15.8681 12.5277C15.9821 12.953 16.2332 13.3287 16.5825 13.5967C16.9318 13.8648 17.3597 14.0101 17.8 14.0101C18.2403 14.0101 18.6682 13.8648 19.0175 13.5967C19.3668 13.3287 19.6179 12.953 19.7318 12.5277C19.8458 12.1024 19.8162 11.6514 19.6477 11.2447C19.4793 10.8379 19.1813 10.4981 18.8 10.278V10.278ZM13.8 2C13.5348 2 13.2804 2.10537 13.0929 2.29291C12.9053 2.48044 12.8 2.73478 12.8 3V8.586L12.312 9.07397C11.8792 8.95363 11.4188 8.98004 11.0026 9.14899C10.5864 9.31794 10.2379 9.61994 10.0115 10.0079C9.78508 10.3958 9.69351 10.8478 9.75109 11.2933C9.80867 11.7387 10.0122 12.1526 10.3298 12.4702C10.6474 12.7878 11.0612 12.9913 11.5067 13.0489C11.9522 13.1065 12.4042 13.0149 12.7921 12.7885C13.18 12.5621 13.4821 12.2136 13.651 11.7974C13.82 11.3812 13.8463 10.9207 13.726 10.488L14.507 9.70697C14.6945 9.51948 14.7999 9.26519 14.8 9V3C14.8 2.73478 14.6946 2.48044 14.5071 2.29291C14.3196 2.10537 14.0652 2 13.8 2ZM9.79999 2C9.53478 2 9.28042 2.10537 9.09289 2.29291C8.90535 2.48044 8.79999 2.73478 8.79999 3V4.586L7.31199 6.07397C6.87924 5.95363 6.41882 5.98004 6.00263 6.14899C5.58644 6.31794 5.23792 6.61994 5.0115 7.00787C4.78508 7.39581 4.69351 7.84781 4.75109 8.29327C4.80867 8.73874 5.01216 9.1526 5.32977 9.47021C5.64739 9.78783 6.06124 9.99131 6.50671 10.0489C6.95218 10.1065 7.40417 10.0149 7.7921 9.78851C8.18004 9.56209 8.48207 9.21355 8.65102 8.79736C8.81997 8.38117 8.84634 7.92073 8.726 7.48798L10.507 5.70697C10.6945 5.51948 10.7999 5.26519 10.8 5V3C10.8 2.73478 10.6946 2.48044 10.5071 2.29291C10.3196 2.10537 10.0652 2 9.79999 2Z"
                                    fill="#035A4B" />
                            </svg>

                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <h4>Creative minds</h4>
                        <p>We choose our teams carefully. Our people are the secret to great work.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="d-flex ps-md-5">
                    <div class="flex-shrink-0">
                        <div class="svg-icon text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="#035A4B" />
                                <path opacity="0.3"
                                    d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z"
                                    fill="#035A4B" />
                            </svg>

                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <h4>Conquer the best</h4>
                        <p>We stay lean and help your product do one thing well.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="d-flex pe-md-5">
                    <div class="flex-shrink-0">
                        <div class="svg-icon text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                    fill="#035A4B" />
                                <path
                                    d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                    fill="#035A4B" />
                            </svg>

                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <h4>Effortless updates</h4>
                        <p>Benefit from automatic updates to all boards any time you need to make a change to your
                            website.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="d-flex ps-md-5">
                    <div class="flex-shrink-0">
                        <div class="svg-icon text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z" fill="#035A4B" />
                                <path
                                    d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                    fill="#035A4B" />
                            </svg>

                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <h4>Designing for people</h4>
                        <p>We actively pursue the right balance between functionality and aesthetics, creating
                            delightful experiences.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-0">
                <!-- Icon Blocks -->
                <div class="d-flex pe-md-5">
                    <div class="flex-shrink-0">
                        <div class="svg-icon text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z"
                                    fill="#035A4B" />
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z"
                                    fill="#035A4B" />
                            </svg>

                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <h4>Strong empathy</h4>
                        <p>We've user tested our own process by shipping over 1k products for clients.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5">
                <!-- Icon Blocks -->
                <div class="d-flex ps-md-5">
                    <div class="flex-shrink-0">
                        <div class="svg-icon text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    fill="#035A4B" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.591 13.209V14.868H11.851C14.392 14.868 16.387 12.915 16.387 10.395C16.387 7.875 14.392 5.922 11.851 5.922C9.31 5.922 7.336 7.875 7.336 10.395H9.121C9.121 8.799 10.234 7.581 11.851 7.581C13.447 7.581 14.602 8.799 14.602 10.395C14.602 11.991 13.447 13.209 11.851 13.209H10.591ZM12 16C11.4477 16 11 16.4477 11 17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16Z"
                                    fill="#035A4B" />
                            </svg>

                        </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                        <h4>Stay curious</h4>
                        <p>We dedicate time for researching and experimentation to increase creativity and imagine new
                            challenges.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </div>
    <!-- End Icon Blocks -->

    <!-- Card Grid -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card bg-primary h-100 overflow-hidden">
                    <div class="card-body">
                        <div class="w-65 pe-2">
                            <h2 class="card-title text-white">Front process</h2>
                            <p class="card-text text-white">Once you are invited to Front Agency, you company will be
                                set within days.</p>
                            <a class="btn btn-light btn-sm btn-transition" href="#">Learn more <i
                                    class="bi-chevron-right small ms-1"></i></a>
                        </div>

                        <div class="position-absolute end-0 bottom-0 w-50 mb-n3 me-n7">
                            <img class="card-img" src="./assets/svg/illustrations/apps.svg" alt="Image Description">
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-lg-6">
                <!-- Card -->
                <div class="card bg-warning h-100 overflow-hidden">
                    <div class="card-body">
                        <div class="w-65 pe-2">
                            <h2 class="card-title text-white">Product design</h2>
                            <p class="card-text text-white">Easy and fast adjustments of elements are possible with
                                Front template.</p>
                            <a class="btn btn-light btn-sm btn-transition" href="#">Learn more <i
                                    class="bi-chevron-right small ms-1"></i></a>
                        </div>

                        <div class="position-absolute end-0 bottom-0 w-50 mb-n3 me-n7">
                            <img class="card-img" src="./assets/svg/illustrations/calendar.svg" alt="Image Description">
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Card Grid -->

    <!-- FAQ -->
    <div class="container content-space-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>Pickup Locations</h2>
        </div>
        <!-- End Heading -->

        <div class="w-lg-65 mx-lg-auto">
            <!-- Accordion -->
            <div class="accordion accordion-flush accordion-lg" id="accordionFAQ">
                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsOne">
                        <a class="accordion-button" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Ebute Meta Hub
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingBasicsOne"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Ebute Meta
                                </li>
                                <li data-v-b4a7f27c="">
                                    Oyinbo
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ajegunle
                                </li>
                                <li data-v-b4a7f27c="">
                                    Yaba
                                </li>
                                <li data-v-b4a7f27c="">
                                    Orile
                                </li>
                                <li data-v-b4a7f27c="">
                                    Alagomeji
                                </li>
                                <li data-v-b4a7f27c="">
                                    Costain
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <!-- End Accordion Item -->

                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsTwo">
                        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Surulere Hub
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingBasicsTwo"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Surulere
                                </li>
                                <li data-v-b4a7f27c="">
                                    Pako Aguda
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ijesha
                                </li>
                                <li data-v-b4a7f27c="">
                                    Itire
                                </li>
                                <li data-v-b4a7f27c="">
                                    Lawanson
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ojuelegba
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <!-- End Accordion Item -->

                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsThree">
                        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Makoko Hub
                        </a>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingBasicsThree"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Makoko
                                </li>
                                <li data-v-b4a7f27c="">
                                    Iwaya
                                </li>
                                <li data-v-b4a7f27c="">
                                    Onike
                                </li>
                                <li data-v-b4a7f27c="">
                                    Sabo
                                </li>
                                <li data-v-b4a7f27c="">
                                    Abule Oja
                                </li>
                                <li data-v-b4a7f27c="">
                                    Abule Ijesha
                                </li>
                                <li data-v-b4a7f27c="">
                                    Old Yaba Road
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <!-- End Accordion Item -->

                <!-- Accordion Item -->
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsFour">
                        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Magodo Hub
                        </a>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingBasicsFour"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Magodo
                                </li>
                                <li data-v-b4a7f27c="">
                                    Magodo Phase 2
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ketu
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ikosi
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ikeja
                                </li>
                                <li data-v-b4a7f27c="">
                                    Agidingbi
                                </li>
                                <li data-v-b4a7f27c="">
                                    CMD Road
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsFive">
                        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Ogba Hub
                        </a>
                    </div>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingBasicsFive"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Ogba
                                </li>
                                <li data-v-b4a7f27c="">
                                    Allen
                                </li>
                                <li data-v-b4a7f27c="">
                                    Berger Road
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsSix">
                        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Ejigbo Hub
                        </a>
                    </div>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingBasicsSix"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Ejigbo
                                </li>
                                <li data-v-b4a7f27c="">
                                    Adeniyi
                                </li>
                                <li data-v-b4a7f27c="">
                                    Agunlejika
                                </li>
                                <li data-v-b4a7f27c="">
                                    NNPC
                                </li>
                                <li data-v-b4a7f27c="">
                                    Idimu Road
                                </li>
                                <li data-v-b4a7f27c="">
                                    Iyana Ejigbo
                                </li>
                                <li data-v-b4a7f27c="">
                                    Isolo
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingBasicsSeven">
                        <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Ikorodu Hub
                        </a>
                    </div>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingBasicsSeven"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <ul data-v-b4a7f27c="">
                                <li data-v-b4a7f27c="">
                                    Ikorodu
                                </li>
                                <li data-v-b4a7f27c="">
                                    Ijede
                                </li>
                                <li data-v-b4a7f27c="">
                                    Elepe
                                </li>
                                <li data-v-b4a7f27c="">
                                    Oke-Eletu
                                </li>
                                <li data-v-b4a7f27c="">
                                    Gberigbe
                                </li>
                                <li data-v-b4a7f27c="">
                                    Eleshin
                                </li>
                                <li data-v-b4a7f27c="">
                                    Igbe
                                </li>
                                <li data-v-b4a7f27c="">
                                    Itamaga
                                </li>
                                <li data-v-b4a7f27c="">
                                    Abule Eko
                                </li>
                            </ul>

                            Call: +234 0000000000
                        </div>
                    </div>
                </div>
                <!-- End Accordion Item -->
            </div>
            <!-- End Accordion -->
        </div>
    </div>
    <!-- End FAQ -->

    <!-- Clients -->
    <div class="container content-space-2 content-space-b-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
            <h2>Our Partners</h2>
        </div>
        <!-- End Heading -->

        <div class="row justify-content-center text-center">
            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/amazon-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/kaplan-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/google-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/airbnb-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/shopify-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/vidados-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/capsule-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/forbes-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                    src="./assets/svg/brands/business-insider-dark.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/hubspot-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/layar-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Clients -->
</main>
@endsection