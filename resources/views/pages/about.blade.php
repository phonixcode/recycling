@extends('layouts.main')

@section('content')
<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative overflow-hidden" style=" background-blend-mode: multiply;
    background-image: url('{{ asset('img/woman_sorting.00d8e69.png') }}'),linear-gradient(rgb(50 139 48),rgb(126 190 38));
    background-repeat: no-repeat;">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4">About Us</h1>
                    <p class="lead text-white text-capitalize mb-4"></p>
                </div>
                <!-- End Title & Description -->
            </div>
        </div>

        <!-- Background Shape -->
        <figure class="position-absolute top-0 start-0 w-65">

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


    <!-- Gallery -->
    <div class="container content-space-t-3 content-space-t-lg-5">
        <div class="w-lg-75 mx-lg-auto">
            <!-- Heading -->
            <div class="mb-5 mb-md-10">
                {{-- <h1 class="display-4">About Us</h1> --}}
                <p class="">
                    Top Point Recyclers is a waste recycling, social benefit, and for-profit company that promotes green
                    environment. It operates an incentive-based program that gathers recyclable materials from
                    post-consumers and recycles them.

                    Individuals, the government, companies, and landfills account for the majority of the PET plastic
                    garbage we manage.

                    Presently, the company recycles and exports products to top textile producers around the globe. We
                    furthermore service clients in Nigeria's manufacturing industry.

                    With the help of our company, we have been able to employ and empower a large number of young people
                    and women in the area where we operate.
                </p>
            </div>
            <!-- End Heading -->
        </div>

        <div class="row gx-3">
            <div class="col mb-3">
                <div class="bg-img-start" style="background-image: url({{ asset('img/image-11.jpg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col-3 d-none d-md-block mb-3">
                <div class="bg-img-start" style="background-image: url({{ asset('img/Where-Does-Plastic-Recycling-Go.jpg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col mb-3">
                <div class="bg-img-start" style="background-image: url({{ asset('img/recycle-bail.png') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="w-100"></div>

            <div class="col mb-3 mb-md-0">
                <div class="bg-img-start" style="background-image: url({{ asset('img/woman_sorting.00d8e69.png') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col-4 d-none d-md-block mb-3 mb-md-0">
                <div class="bg-img-start" style="background-image: url({{ asset('img/XC3A6S4EX5BVBBOUIFFKGBFWIY.jpg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col">
                <div class="bg-img-start" style="background-image: url({{ asset('img/SEI_129262540.jpg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Gallery -->

    <div class="border-top mx-auto" style="max-width: 25rem;"></div>

    <!-- Info -->
    <div class="container content-space-2 content-space-lg-3">
        <div class="row justify-content-lg-between">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2>Our Mission</h2>
            </div>
            <!-- End Col -->

            <div class="col-lg-6">
                <p>Our long-term goal is to shift consumers' perceptions about waste, so that they see trash as a source
                    rather than a required burden of consumption.
                    For us, recycling is a process in which we create something out of nothing - we convert garbage into
                    a product.</p>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Info -->

    <div class="border-top mx-auto" style="max-width: 25rem;"></div>

    {{-- <!-- Team -->
    <div class="container content-space-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <span class="text-cap">Our team</span>
            <h2>Creative minds</h2>
        </div>
        <!-- End Heading -->

        <div class="row gx-3 mb-5">
            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Founder / CEO</span>
                        <h4 class="card-title">Christina Kray</h4>
                        <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>
                    </div>

                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Project Manager</span>
                        <h4 class="card-title">Jeff Fisher</h4>
                        <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>
                    </div>

                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Product Designer</span>
                        <h4 class="card-title">Amy Forren</h4>
                        <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>
                    </div>

                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Support Consultant</span>
                        <h4 class="card-title">Philip Williams</h4>
                        <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.
                        </p>
                    </div>

                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Team --> --}}
@include('pages._step')
    @include('pages._banner')

</main>
@endsection
