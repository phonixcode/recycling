@extends('layouts.main')

@section('content')
    <main id="content" role="main">

        <div class="position-relative overflow-hidden"
            style=" background-blend-mode: multiply;
    background-image: url('{{ asset('img/banner.jpeg') }}'),linear-gradient(rgb(50 139 48),rgb(126 190 38));
    background-repeat: no-repeat;
    background-size: cover;">
            <div class="container position-relative zi-2 content-space-3 content-space-md-5">
                <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                    <!-- Heading -->
                    <div class="mb-7">
                        <h1 class="display-4 text-white text-capitalize mb-4">What We Do</h1>
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
                            <p class="card-text text-body">We collect the PET bottles generated from households and local pickers and prepare them for the subsequent stage of recycling.</p>
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
                            <p class="card-text text-body">We sort the bottles by color, removing the labels and caps during this process. This ensures that the bottles are clean and prepared for the next stage .Sorting them in this manner enhances the quality of the recycled materials.</p>
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
                                We compress the PET bottles into smaller bales to facilitate transport. This enhances the efficiency of transferring the bottles to the recycling facilities.
                            </p>
                        </div>

                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>

        <div class="container content-space-2 content-space-lg-3">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="text-center">
                        <small class="text-cap text-primary">— Total Collection </small>
                        <h4 class="display-4">1200 tons</h4>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="text-center">
                        <small class="text-cap text-primary">— Staff</small>
                        <h4 class="display-4">70</h4>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                    <div class="text-center">
                        <small class="text-cap text-primary">— Area of Operation</small>
                        <h4 class="display-4">1</h4>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>

        <!-- Clients -->
        <div class="container content-space-2 content-space-lg-3">

            <div class="container content-space-2 ">
                <h2>Household Collection</h2>
                <div class="row justify-content-lg-between">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <img class="rounded img-fluid shadow-effect" src="{{ asset('img/wht/20241207_151025.jpg') }}" alt="">
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <p>
                            The household collection program is an incentive based initiative that gathers recyclable
                            materials directly from residents’ home. With a primary focus on plastic and other recyclables,
                            allowing households to dispose their waste responsibly. By simplifying the process, the program
                            encourages participation and helps reduce the amount of waste that ends up at Landfills.
                        </p>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="container content-space-2 ">
                <h2>Women Empowerment</h2>

                <div class="row justify-content-lg-between">
                    <div class="col-lg-6">
                        <p>
                            The women empowerment program at Top Point Recyclers focuses on supporting young widows and
                            divorcees by providing them with skill development and vocational training in the recycling
                            industry. This initiative aims to equip these women with the necessary knowledge and resources
                            to achieve financial independence and improve their social standing, addressing the
                            stigmatization they often face. By integrating them into our workforce, the program builds
                            resilience and self-esteem, enabling them to contribute positively to their communities while
                            promoting sustainable practices and gender equality. In Kano, we have successfully empowered 60
                            women through our recycling initiatives. These women have also become advocates for
                            sustainability in their immediate communities.
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <img class="rounded img-fluid shadow-effect" src="{{ asset('img/wht/20240502_103038.jpg') }}" alt="">
                    </div>
                </div>
                <!-- End Row -->
            </div>

            <div class="container content-space-2 ">
                <h2>Creating Awareness</h2>
                <div class="row justify-content-lg-between">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <img class="rounded img-fluid shadow-effect" src="{{ asset('img/wht/recycle.png') }}" alt="">
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <p>
                            At Top Point Recyclers, we ensure that people are aware of the benefits of recycling, letting
                            them understand how they save the planet and ecosystem. We go to schools to engage with
                            students, marketplaces, and communities
                        </p>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="container content-space-2 ">
                <h2>Promoting Environmental Sustainability</h2>

                <div class="row justify-content-lg-between">
                    <div class="col-lg-6">
                        <p>
                            At Top Point Recyclers, we promote sustainability via our work, driving joint recycling
                            initiatives and efforts across the Northern part of Nigeria.
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <img class="rounded img-fluid" src="{{ asset('img/wht/aware.jpeg') }}" alt="">
                    </div>
                </div>
                <!-- End Row -->
            </div>

            
        </div>


        <!-- End Clients -->
        @include('pages._banner')
    </main>
@endsection
