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
                        <h1 class="display-4 text-white text-capitalize mb-4">Contact us</h1>
                        <p class="lead text-white text-capitalize mb-4">We'd love to talk about how we can help you.</p>
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

        <!-- Contact Form -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="mx-auto" style="max-width: 35rem;">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Heading -->
                        <div class="text-center mb-5 mb-md-9">
                            {{-- <h2>Tell us about yourself</h2> --}}
                            <p>
                                If you would like to discuss how we could help
                                you with plastic waste or you are looking for
                                suppliers of processed plastic, please contact
                                us on <b>+ 2349057456389</b> or via the contact form
                                below.
                            </p>
                        </div>
                        <!-- End Heading -->

                        <!-- Form -->
                        <form>
                            @csrf
                            <div class="row gx-3">

                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="hireUsFormLasttName">Name</label>
                                        <input type="text" class="form-control form-control-lg" name="name"
                                            id="hireUsFormLasttName" placeholder="name" aria-label="name">
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <div class="row gx-3">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            id="hireUsFormWorkEmail" placeholder="email@site.com"
                                            aria-label="email@site.com">
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="hireUsFormPhone">Phone <span
                                                class="form-label-secondary"></span></label>
                                        <input type="text" class="form-control form-control-lg" name="phone"
                                            id="hireUsFormPhone" placeholder="+x(xxx)xxx-xx-xx"
                                            aria-label="+x(xxx)xxx-xx-xx">
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="hireUsFormDetails">Message</label>
                                <textarea class="form-control form-control-lg" name="message" id="hireUsFormDetails"
                                    placeholder="Tell us about your ..." aria-label="Tell us about your ..." rows="4"></textarea>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                            </div>
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

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                event.preventDefault();

                var $submitButton = $('button[type="submit"]');
                $submitButton.text('Sending...');

                var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get the CSRF token value

                $.ajax({
                    type: 'POST',
                    url: '/send-email', // Replace with your route
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                    },
                    success: function(response) {
                        $submitButton.text('Sent');
                        // Handle success, e.g., display a success message
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $submitButton.text('Send Failed');
                        // Handle error, e.g., display the error message
                        var errorMessage = JSON.parse(jqXHR.responseText).error;
                        console.error('Email send error:', errorMessage);
                        // Display the error message to the user, e.g., using an alert or a message element
                    }
                });
            });
        });
    </script>
@endpush
