@extends('page.page-layouts.default')
@section('page')
    @include('shared.nav')
    <header class="index" data-aos="fade-down">
        <div class="cover">
            <div class="layout-table">
                <div class="layout-row">
                    <div class="logo">
                        <h1>Complete Technology Solutions</h1>
                        <p class="lead">
                            Our really cool elevator pitch goes here!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="feature" data-aos="fade-down">
        <div class="container">
            <div class="row text-center">
                <h1>Welcome Message</h1>
                <p class="lead text-center">
                    Welcome to Complete Technology Solutions. We offer services to meet your businesses everyday
                    technology needs. From basic helpdesk support, to programming and development,
                    Complete Technology Solutions has you covered.
                <ul>
                    <li>From 1 computer in 1 office to hundreds of computers in multiple locations</li>
                    <li>We can take over an existing network, or design one from scratch</li>
                    <li>Servers, desktops, small-scale or large-scale upgrades</li>
                    <li>Printer issues</li>
                    <li>Surge suppression</li>
                    <li>Internet connectivity issues</li>
                    <li>File, network, and Internet security</li>
                    <li>Backups</li>
                    <li>Disaster planning</li>
                    <li>Already use a computer company or have an IT person on staff? Use CTS for backup in case they
                        can't make it.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 products text-center" data-aos="fade-up">
                    <img src="/img/atlas-2.jpg" alt="" class="img-responsive">
                    <h1>Atlas For Workforce</h1>
                    <p class="lead">
                        Assertively initiate accurate architectures and synergistic materials. Rapidiously
                        recaptiualize cost effective e-commerce via 2.0 "outside the box" thinking.
                    </p>
                </div>
                <div class="col-md-6 products" data-aos="fade-down">
                    <img src="/img/interns.jpeg">
                    <h3 class="lead text-center">Atlas Intern and Recruitment</h3>
                    <p>
                        Globally recaptiualize highly efficient services for e-business technology. Conveniently
                        enable state of the art alignments vis-a-vis professional e-business.
                    </p>
                </div>
                <div class="col-md-6 products" data-aos="fade-down">
                    <img src="/img/development.jpg">
                    <h3 class="lead text-center">Web and Application Development</h3>
                    <p>
                        Enthusiastically leverage existing collaborative users after enterprise-wide web services.
                        Distinctively reinvent customized functionalities after virtual growth strategies.
                    </p>
                </div>


                <div class="col-md-12 products text-center" data-aos="slide-left">
                    <img src="/img/atlas-network.jpg">
                    <h1 class="">Network and System Management</h1>
                    <p class="lead">
                        Holisticly morph emerging innovation whereas mission-critical process improvements.
                        Efficiently provide access to cross-media systems before tactical scenarios.
                    </p>
                </div>
                <div class="col-md-6 products">
                    <img src="/img/it.jpg" alt="" class="img-responsive" data-aos="fade-down">
                    <h3 class="lead text-center">IT Sales and Support</h3>
                    <p>
                        Competently architect customer directed platforms without superior deliverables.
                        Compellingly visualize functionalized methodologies without business convergence.
                    </p>
                </div>
                <div class="col-md-6 products">

                    <img src="/img/embedded.jpg" alt="" class="img-responsive" data-aos="fade-down">
                    <h3 class="lead text-center">Embedded Devices</h3>
                    <p>
                        Enthusiastically deliver process-centric catalysts for change after bleeding-edge methods of
                        empowerment. Competently extend parallel sources with parallel paradigms.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <section class="clients" data-aos="fade-up">
        <div class="container">
            <div class="row text-center">
                <h2>Our Clients </h2>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    [ CLIENT LOGO HERE ]
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    [ CLIENT LOGO HERE ]
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    [ CLIENT LOGO HERE ]
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="client-logo">
                        <div class="layout-table">
                            <div class="layout-row">
                                <p class="lead">
                                    [ CLIENT LOGO HERE ]
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
