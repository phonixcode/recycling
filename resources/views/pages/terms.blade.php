@extends('layouts.main')
@section('content')
<main id="content" role="main">

    <div class="position-relative bg-primary overflow-hidden">
        <div class="container position-relative zi-2 content-space-3 content-space-md-5">
            <div class="w-md-75 w-xl-65 text-center mx-md-auto">
                <!-- Heading -->
                <div class="mb-7">
                    <h1 class="display-4 text-white text-capitalize mb-4">Terms &amp; Conditions</h1>
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

    <!-- Content -->
    <div class="container content-space-1 content-space-md-3">
      <div class="row">
        <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
          <!-- Navbar -->
          <div class="navbar-expand-md">
            <!-- Navbar Toggle -->
            <div class="d-grid">
              <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                <span class="d-flex justify-content-between align-items-center">
                  <span class="text-dark">Menu</span>

                  <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                  </span>

                  <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                  </span>
                </span>
              </button>
            </div>
            <!-- End Navbar Toggle -->

            <!-- Navbar Collapse -->
            <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
              <ul id="navbarSettings" class="js-sticky-block js-scrollspy nav nav-tabs nav-link-gray nav-vertical"
                  data-hs-sticky-block-options='{
                   "parentSelector": "#navbarVerticalNavMenu",
                   "targetSelector": "#header",
                   "breakpoint": "md",
                   "startPoint": "#navbarVerticalNavMenu",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": 80
                 }'>
                <li class="nav-item">
                  <a class="nav-link active" href="#content">1. Accounts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#linksToOtherWebsInfo">2. Links to other websites</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#terminationInfo">3. Termination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#goveringLawInfo">4. Governing law</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#changesInfo">5. Changes</a>
                </li>
              </ul>
            </div>
            <!-- End Navbar Collapse -->
          </div>
          <!-- End Navbar -->
        </div>
        <!-- End Col -->

        <div class="col-md-8 col-lg-9">
          <div class="mb-7">
            <p>Thanks for using our products and services ("Services"). The Services are provided by Pixeel Ltd. ("Space"), located at 153 Williamson Plaza, Maggieberg, MT 09514, England, United Kingdom.</p>

            <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>

            <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>
          </div>

          <div id="accountInfo" class="mb-7">
            <h4>1. Accounts</h4>

            <p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>

            <p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>

            <p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>
          </div>

          <div id="linksToOtherWebsInfo" class="mb-7">
            <h4>2. Links to other websites</h4>

            <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Space.</p>

            <p>Space has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Space shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

            <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
          </div>

          <div id="terminationInfo" class="mb-7">
            <h4>3. Termination</h4>

            <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

            <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>

            <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

            <p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>

            <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
          </div>

          <div id="goveringLawInfo" class="mb-7">
            <h4>4. Governing law</h4>

            <p>These Terms shall be governed and construed in accordance with the laws of Jersey, without regard to its conflict of law provisions.</p>

            <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
          </div>

          <div id="changesInfo" class="mb-7">
            <h4>5. Changes</h4>

            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

            <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
          </div>

          <!-- End Sticky End Point -->
          <div id="stickyBlockEndPoint"></div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
@endsection
