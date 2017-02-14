@extends('page.page-layouts.default')
@section('page')
    @include('shared.nav')
    <header class="index" data-aos="fade-down">
        <div class="cover">
            <div class="layout-table">
                <div class="layout-row">
                    <div class="logo">
                        <h1>Complete Technology Solutions...</h1>
                        <p class="lead">
                            Serving the IT Community since 1995
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="feature" data-aos="fade-down">
        <div class="container">
            <div class="row text-center">
                <h1>Welcome</h1>
                <p class="lead text-center">
                    Welcome to Complete Technology Solutions. We offer services to meet your businesses everyday
                    technology needs. From basic helpdesk support, to programming and development,
                    Complete Technology Solutions has you covered.
                </p>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 products text-center" data-aos="fade-up">
                    <img class="img-responsive" src="/img/atlas-2.jpg" alt="" class="img-responsive">
                    <h1>Atlas For Workforce</h1>
                    <p class="lead">
                        ATLAS is a highly customizable web-based platform designed from the ground up to streamline workflow and service delivery
                        methods for Workforce Development agencies. ATLAS incorporates technology that empowers some of the Nations largest and
                        busiest Workforce Boards to efficiently track customers, archive activity and documents and inclusively link all information
                        utilizing a centralized application.
                    </p>
                </div>
                <div class="col-md-6 products" data-aos="fade-down">
                    <img class="img-responsive" src="/img/interns.jpeg">
                    <h3 class="lead text-center">Atlas Intern and Recruitment</h3>
                    <p>
                        Atlas Intern and Recruitment is a powerful SASS application that connects individuals to opportunities. Offering a fluid and clean experience for all. With a clean user interface,
                        featuring user and administration dashboards, user friendly reporting, built in application and resume management.
                    </p>
                </div>
                <div class="col-md-6 products" data-aos="fade-down">
                    <img class="img-responsive" src="/img/development.jpg">
                    <h3 class="lead text-center">Web and Application Development</h3>
                    <p>
                        From basic websites to complete web applications, our development team gets the job done! Our developers work with the latest frameworks to
                        provide our clients with a perfect solution to accommodate any software need.
                    </p>
                </div>


                <div class="col-md-12 products text-center" data-aos="slide-up">
                    <img class="img-responsive" src="/img/atlas-network.jpg">
                    <h1 class="">Network and System Management</h1>
                    <p class="lead">
                        Our Network and systems administration team has your businesses back! Offering 24/7 monitoring and technical assistance, we keep your network
                        and systems up and running. With Complete Technology Solutions managing your computer infrastructure, you will have the ease of ming knowing
                        that not only is your systems are functional, but also secure.
                    </p>
                </div>
                <div class="col-md-6 products">
                    <img class="img-responsive" src="/img/it.jpg" alt="" class="img-responsive" data-aos="fade-down">
                    <h3 class="lead text-center">IT Sales and Support</h3>
                    <p>
                        Partnered with the leading vendors in the industry, we offer competitive pricing on all your businesses technology needs. Backing up our sales with
                        our dedicated support team, allows you to concentrate on your work, and not on your IT related issues.
                    </p>
                </div>
                <div class="col-md-6 products">

                    <img class="img-responsive" src="/img/embedded.jpg" alt="" class="img-responsive" data-aos="fade-down">
                    <h3 class="lead text-center">Kiosk and Embedded Devices</h3>
                    <p>
                        Our kiosks utilize the most advanced PC technology on the market - Embedded Technology. No moving parts means no hardware failures. KioskPros
                        offers the overall lowest unit price. All prices quoted are for turnkey units. No surprises, no add-ons like other kiosk vendors.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <section class="clients" >
        <div class="container" data-aos="fade-up">

            <div class="col-md-12">
                <p class="small text-center">Our Partners</p>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    <img src="img/partners/microsoft.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    <img src="img/partners/cisco.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    <img src="img/partners/dell.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    <img src="img/partners/sonicwall.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    <img src="img/partners/vmware.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    <img src="img/partners/ubuntu.png">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('shared.footer')
    @push('styles')
    <link rel="stylesheet" href="/assets/aos/aos.css">
    <style type="text/css">
        .logo {
            display: none;
        }
    </style>
    @endpush
    @push('scripts')
    <script src="/assets/aos/aos.js"></script>
    <script>
        $(document).ready(function () {
            $('.logo').fadeToggle(1000, "linear");
        });
        AOS.init();
    </script>
    @endpush
@endsection
