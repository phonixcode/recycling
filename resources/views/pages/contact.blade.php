@extends('layouts.main')

@section('content')
<main id="content" role="main">

    <div class="position-relative bg-primary overflow-hidden">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4">Contact us</h1>
                    <p class="lead text-white text-capitalize mb-4">We'd love to talk about how we can help you.</p>
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

    <!-- Contact Form -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="mx-auto" style="max-width: 35rem;">
        <!-- Card -->
        <div class="card">
          <div class="card-body">
            <!-- Heading -->
            <div class="text-center mb-5 mb-md-9">
              <h2>Tell us about yourself</h2>
              <p>Whether you have questions or you would just like to say hello, contact us.</p>
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form>
              <div class="row gx-3">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormFirstName">First name</label>
                    <input type="text" class="form-control form-control-lg" name="hireUsFormNameFirstName" id="hireUsFormFirstName" placeholder="First name" aria-label="First name">
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormLasttName">Last name</label>
                    <input type="text" class="form-control form-control-lg" name="hireUsFormNameLastName" id="hireUsFormLasttName" placeholder="Last name" aria-label="Last name">
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="row gx-3">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                    <input type="email" class="form-control form-control-lg" name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com">
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-3">
                    <label class="form-label" for="hireUsFormPhone">Phone <span class="form-label-secondary">(Optional)</span></label>
                    <input type="text" class="form-control form-control-lg" name="hireUsFormNamePhone" id="hireUsFormPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="hireUsFormDetails">Message</label>
                <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails" placeholder="Tell us about your ..." aria-label="Tell us about your ..." rows="4"></textarea>
              </div>
              <!-- End Form -->

              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
              </div>

              {{-- <div class="text-center">
                <p class="form-text">We'll get back to you in 1-2 business days.</p>
              </div> --}}
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Contact Form -->
  </main>
@endsection
