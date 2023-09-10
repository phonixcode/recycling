@extends('layouts.main')

@section('content')
<main id="content" role="main">

    <!-- Hero -->
    <div class="position-relative bg-primary overflow-hidden">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4">Portfolio</h1>
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
    <!-- End Hero -->


    <!-- Card Grid -->
    <div class="container content-space-b-2 content-space-b-lg-3">
        <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal mb-7">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-left"></i>
                </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-right"></i>
                </a>
            </span>

            <!-- Nav -->
            <ul class="js-filter-options nav nav-segment nav-pills d-flex mx-auto" style="max-width: 30rem;">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:;" data-group="all">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="branding">Branding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="design">Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;" data-group="illustration">Illustration</a>
                </li>
            </ul>
            <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->

        <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img12.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Product</span>
                        <h3 class="card-title">Canva Schedule</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img11.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Branding</span>
                        <h3 class="card-title">Electro bike</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img21.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Branding</span>
                        <h3 class="card-title">Larq</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img24.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Product</span>
                        <h3 class="card-title">Zibbet</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["illustration"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img19.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Illustration</span>
                        <h3 class="card-title">Adobe Ai</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img20.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Branding</span>
                        <h3 class="card-title">Goby</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img22.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Branding</span>
                        <h3 class="card-title">OK</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img23.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Design</span>
                        <h3 class="card-title">Flaunter</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
                <!-- Card -->
                <a class="card card-flush card-transition" href="#">
                    <img class="card-img-top" src="./assets/img/400x500/img10.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-body">Design</span>
                        <h3 class="card-title">Inside weather</h3>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Card Grid -->
</main>
@endsection
