@extends('layouts.main')

@section('content')
<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative overflow-hidden" style=" background-blend-mode: multiply;
    background-image: url('{{ asset('img/banner.jpeg') }}'),linear-gradient(rgb(50 139 48),rgb(126 190 38));
    background-repeat: no-repeat;
    background-size: cover;">
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
                    Top Point Recyclers is a social enterprise focused on the collection, sorting, and baling of PET bottles sourced from local pickers and households. We empower women by creating job opportunities for young women, widows and divorced women, promoting financial independence. Our mission is to enhance environmental sustainability by facilitating the shipment of sorted materials to recycling facilities both locally and globally, while raising awareness in the community about the value of recycling and the concept that waste can be transformed into wealth.
                </p>
            </div>
            <!-- End Heading -->
        </div>

        <div class="row gx-3">
            <div class="col mb-3">
                <div class="rounded bg-img-start" style="background-image: url({{ asset('img/abt/1.jpeg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col-3 d-none d-md-block mb-3">
                <div class="rounded bg-img-start" style="background-image: url({{ asset('img/1.jpeg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col mb-3">

                <div class="rounded bg-img-start"
                            style="background-image: url({{ asset('img/IMG_8484.jpg') }}); height: 15rem;">
                        </div>
            </div>
            <!-- End Col -->

            <div class="w-100"></div>

            <div class="col mb-3 mb-md-0">
                <div class="rounded bg-img-start" style="background-image: url({{ asset('img/abt/2.jpeg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col-4 d-none d-md-block mb-3 mb-md-0">
                <div class="rounded bg-img-start" style="background-image: url({{ asset('img/abt/3.jpeg') }}); height: 15rem;">
                </div>
            </div>
            <!-- End Col -->

            <div class="col">
                <div class="rounded bg-img-start" style="background-image: url({{ asset('img/abt/4.jpeg') }}); height: 15rem;">
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
                <p>
                    Our mission at Top Point Recyclers is to become a leading force in the collection of PET bottles, empowering local communities, especially women, by creating sustainable job opportunities. We are dedicated to promoting environmental sustainability through effective waste management and raising awareness about the transformative power of our efforts. Together, we strive to turn waste into wealth, fostering a cleaner and greener future for all. We recycle now, for a better tomorrow.
                </p>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Info -->

    <div class="border-top mx-auto" style="max-width: 25rem;"></div>

    <!-- Team -->
    <div class="container content-space-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>Our team</h2>
        </div>
        <!-- End Heading -->

        <div class="row gx-3 mb-5">
            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{ asset('img/team/adu.jpeg') }}" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Co-Founder / Executive Director</span>
                        <h4 class="card-title">Ahmed Mujahid Abubakar</h4>
                    </div>
                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="https://x.com/i/flow/login?redirect_after_login=%2Ftoppointrecycle" target="_blank">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="https://www.linkedin.com/in/mujahid-ahmed-83884526b/" target="_blank">
                                    <i class="bi-linkedin"></i>
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
                            <img class="avatar-img" src="{{ asset('img/team/aro.jpeg') }}" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Head, Business Development and Communications.</span>
                        <h4 class="card-title">Mustapha Arole</h4>
                    </div>

                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="https://x.com/mustyarole?s=21&t=fXkX8B4Of_7IlkjHBoTBDw" target="_blank">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="www.linkedin.com/in/arole-mustapha" target="_blank">
                                    <i class="bi-linkedin"></i>
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
                            <img class="avatar-img" src="{{ asset('img/team/qudus.jpeg') }}" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Tech Operations</span>
                        <h4 class="card-title">Qudus Oyetola</h4>
                    </div>

                    <div class="card-footer pt-0">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="https://www.linkedin.com/in/qudusoyetola/" target="_blank">
                                    <i class="bi-linkedin"></i>
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
                            <img class="avatar-img" src="{{ asset('img/team/factory.jpeg') }}" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Factory Manager</span>
                        <h4 class="card-title">Godiya Lessa</h4>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{ asset('img/team/house-hold.jpeg') }}" alt="Image Description">
                        </div>

                        <span class="card-subtitle">House Hold Collection Manager</span>
                        <h4 class="card-title">Nkiruka Christian</h4>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3">
                <!-- Card -->
                <div class="card card-transition h-100">
                    <div class="card-body">
                        <div class="avatar avatar-lg avatar-circle mb-4">
                            <img class="avatar-img" src="{{ asset('img/team/operations.jpeg') }}" alt="Image Description">
                        </div>

                        <span class="card-subtitle">Factory Supervisor</span>
                        <h4 class="card-title">Hauwa Abdullahi </h4>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <!-- End Col -->
        </div>
       
    </div>
    <!-- End Team -->
    @include('pages._step')

    <div class="container content-space-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            {{-- <span class="text-cap">Our Brands</span> --}}
            <h2>Brands we've worked with</h2>
        </div>
        <!-- End Heading -->

        <div class="row gx-3 mb-5">
            <div class="col-sm-6 col-lg-3 mb-3">
                <img class="img-fluid" src="{{ asset('img/brands/alef.jpeg') }}" alt="">
            </div>
            <div class="col-sm-6 col-lg-3 mb-3">
                <img class="img-fluid" src="{{ asset('img/brands/mando.jpeg') }}" alt="">
            </div>
            <div class="col-sm-6 col-lg-3 mb-3">
                <img class="img-fluid" src="{{ asset('img/brands/polysmart.jpeg') }}" alt="">
            </div>
            <div class="col-sm-6 col-lg-3 mb-3">
                <img class="img-fluid" src="{{ asset('img/brands/westafrica.jpeg') }}" alt="">
            </div>
            <div class="col-sm-6 col-lg-3 mb-3">
                <img class="img-fluid" src="{{ asset('img/brands/intco.png') }}" alt="">
            </div>
        </div>
    </div>


    @include('pages._banner')

</main>
@endsection
