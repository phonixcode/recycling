@extends('layouts.main')

@section('content')
    <main id="content" role="main">

        <div class="position-relative overflow-hidden"
            style=" background-blend-mode: multiply;
    background-image: url('{{ asset('img/woman_sorting.00d8e69.png') }}'),linear-gradient(rgb(50 139 48),rgb(126 190 38));
    background-repeat: no-repeat;">
            <div class="container position-relative zi-2 content-space-3 content-space-md-5">
                <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                    <!-- Heading -->
                    <div class="mb-7">
                        <h1 class="display-4 text-white text-capitalize mb-4">What We Sell</h1>
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

        <!-- Clients -->
        <div class="container content-space-2 content-space-lg-3">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="text-cap">Products for Your Needs</span>
                {{-- <span>We offer our customers the most comprehensive multitude of raw materials in the industry, including virgin and recycled thermoplastic resins ranging from polyethylene terephthalate (PET) to polypropylene (PP) to polyethylene (PE) to polystyrene (PS). Throughout our manufacturing operations, we use state-of-the-art processing technology and equipment to continuously deliver the highest-quality products for our customers</span> --}}
            </div>
            <!-- End Heading -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
                <div class="col mb-5">
                    <!-- Card -->
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('img/869f3eee-0a42-4a74-9894-da20af03b061.jpg') }}"
                            alt="Image Description">

                        <div class="card-body">
                            <div class="mb-3">
                                <span class="text-cap">POLYETHYLENE TEREPHTHALATE (PET)</span>
                            </div>
                            <p class="card-text">
                                PET is frequently used in bottle applications since it is 100% recyclable and never ends up in a landfill. Whether they are PET bottles, trays, films, etc., Top Point Recycler can provide comprehensive PET recycling. To learn more about our PET recycling services, get in touch with us.
                            </p>
                        </div>


                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                {{-- <div class="col mb-5">
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/ldpe-01.jpg') }}" alt="Image Description">

                    <div class="card-body">
                        <div class="mb-3">
                            <span class="text-cap">LOW DENSITY POLYETHYLENE (LDPE)</span>
                        </div>
                        <p class="card-text">
                            Low density polyethylene (LDPE) is commonly used for shrink wrap, grocery bags and other clear film packaging/wraps. LDPE waste is most commonly found in distribution centres, warehouses, food manufacturers, supermarkets and cash & carries, here at Top Point Recyclers we can offer a complete LDPE recycling Service, we sell LDPE waste waste at competitive rates.
                        </p>
                    </div>


                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col mb-5">
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/hdpe-01.jpg') }}" alt="Image Description">

                    <div class="card-body">
                        <div class="mb-3">
                            <span class="text-cap">HIGH DENSITY POLYETHYLENE (HDPE)</span>
                        </div>
                        <p class="card-text">
                            High density polyethylene is a stronger heavier plastic and is used a wide range of applications due to its durability. These are most commonly found in items such as pipes, road traffic barriers, bins, detergent bottles, milk bottles etc.
                        </p>
                    </div>


                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col mb-5">
                <!-- Card -->
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/polypropylene-01.jpg') }}" alt="Image Description">

                    <div class="card-body">
                        <div class="mb-3">
                            <span class="text-cap">POLYPROPYLENE (PP)</span>
                        </div>
                        <p class="card-text">
                            Plastics made up of PP (polypropylene) is a one of the most commonly used plastic and can be found in daily applications including items such as fruit crates, buckets, pallets, pots and many more including production waste lumps, purge. Whether you have redundant trays, baskets or scrap PP,
                            Top Point Recyclers we sell PP scrap that can be reused in manufacturing.
                        </p>
                    </div>


                </div>
                <!-- End Card -->
            </div> --}}
                <!-- End Col -->
            </div>

            <div class="container content-space-t-3 content-space-t-lg-5">


                <div class="row gx-3">
                    <div class="col mb-3">
                        <div class="bg-img-start"
                            style="background-image: url({{ asset('img/image-11.jpg') }}); height: 15rem;">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-3 d-none d-md-block mb-3">
                        <div class="bg-img-start"
                            style="background-image: url({{ asset('img/Where-Does-Plastic-Recycling-Go.jpg') }}); height: 15rem;">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col mb-3">
                        <div class="bg-img-start"
                            style="background-image: url({{ asset('img/recycle-bail.png') }}); height: 15rem;">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="w-100"></div>

                    <div class="col mb-3 mb-md-0">
                        <div class="bg-img-start"
                            style="background-image: url({{ asset('img/woman_sorting.00d8e69.png') }}); height: 15rem;">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-4 d-none d-md-block mb-3 mb-md-0">
                        <div class="bg-img-start"
                            style="background-image: url({{ asset('img/XC3A6S4EX5BVBBOUIFFKGBFWIY.jpg') }}); height: 15rem;">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col">
                        <div class="bg-img-start"
                            style="background-image: url({{ asset('img/SEI_129262540.jpg') }}); height: 15rem;">
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Clients -->
@include('pages._step')
        @include('pages._banner')
    </main>
@endsection
