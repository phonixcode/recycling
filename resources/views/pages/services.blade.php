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
                    <img class="card-img-top" src="{{ asset('img/rigid-plastic-01.jpg') }}" alt="Image Description">

                    <div class="card-body">
                        <div class="mb-3">
                            <span class="text-cap">RIGID PLASTIC</span>
                        </div>
                        <p class="card-text">
                            Rigid plastics are commonly made up of PP/HDPE also when rigid plastics are mixed together commonly they are difficult to process and recycle due to the complexity of the separation process.
                            Here at Top Point Recyclers we have been processing rigids in both mixed and segregated forms for the last decade working with local authorities and waste management companies we can offer a complete mixed rigid recycling solution. Get in touch today to find out more.
                        </p>
                    </div>


                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col mb-5">
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
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Clients -->
</main>
@endsection
