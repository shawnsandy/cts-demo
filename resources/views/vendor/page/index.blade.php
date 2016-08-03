@extends('page::page-layouts.default')
@section('page')
    @include('shared.nav')
    <header class="index">
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

    <section class="feature">
        <div class="container">
            <div class="row text-center">
                <h1>Welcome Message</h1>
                <p class="lead text-center">
                    Synergistically procrastinate sustainable intellectual capital rather than interdependent leadership
                    skills. Objectively myocardinate high-quality content through team driven technology. Interactively
                    syndicate 24/365 networks through virtual leadership. Monotonectally utilize competitive data before
                    resource sucking infomediaries. Collaboratively pontificate stand-alone relationships after
                    real-time benefits.
                </p>
            </div>

        </div>

    </section>

    <main>



            <div class="container">
                <div class="row">
                    <div class="col-md-12 products text-center">
                        <img src="/img/atlas-2.jpeg" alt="" class="img-responsive">
                        <h1>Atlas For Workforce</h1>
                        <p class="lead">
                            Assertively initiate accurate architectures and synergistic materials. Rapidiously
                            recaptiualize cost effective e-commerce via 2.0 "outside the box" thinking. Globally
                            streamline frictionless human capital rather than one-to-one bandwidth. Objectively
                            customize corporate.
                        </p>
                    </div>
                    <div class="col-md-6 products">
                        <img src="/img/interns.jpeg">
                        <h3 class="lead text-center">Atlas Intern and Recruitment</h3>
                        <p>
                            Globally recaptiualize highly efficient services for e-business technology. Conveniently
                            enable state of the art alignments vis-a-vis professional e-business. Appropriately exploit
                            out-of-the-box mindshare before premium vortals. Assertively formulate enabled models via.
                        </p>
                    </div>
                    <div class="col-md-6 products">
                        <img src="/img/development.jpeg">
                        <h3 class="lead text-center">Web and Application Development</h3>
                        <p>
                            Enthusiastically leverage existing collaborative users after enterprise-wide web services.
                            Distinctively reinvent customized functionalities after virtual growth strategies.
                            Monotonectally maintain prospective e-markets through web-enabled portals.
                        </p>
                    </div>


                    <div class="col-md-12 products text-center">
                        <img src="/img/atlas-network-2.jpeg">
                        <h1 class="">Network and System Management</h1>
                        <p class="lead">
                            Holisticly morph emerging innovation whereas mission-critical process improvements.
                            Efficiently provide access to cross-media systems before tactical scenarios. Competently
                            iterate interdependent data rather than quality "outside the box" thinking. Credibly
                            actualize.
                        </p>
                    </div>
                    <div class="col-md-6 products">
                        <img src="/img/it.jpeg" alt="" class="img-responsive">
                        <h3 class="lead text-center">IT Sales and Support</h3>
                        <p>
                            Competently architect customer directed platforms without superior deliverables.
                            Compellingly visualize functionalized methodologies without business convergence. Quickly
                            innovate clicks-and-mortar value for team building channels. Seamlessly productize
                            plug-and-play communities before resource-leveling scenarios.
                        </p>
                    </div>
                    <div class="col-md-6 products">

                        <img src="/img/embedded.jpeg" alt="" class="img-responsive">
                        <h3 class="lead text-center">Embedded Devices</h3>
                        <p>
                            Enthusiastically deliver process-centric catalysts for change after bleeding-edge methods of
                            empowerment. Competently extend parallel sources with parallel paradigms. Interactively
                            leverage other's web-enabled alignments without team driven interfaces. Credibly matrix
                            innovative.
                        </p>
                    </div>
                </div>


        </div>


    </main>
    <section class="clients">
        <div class="container">
            <div class="row text-center">
                <h2>Our Clients </h2>
                <hr>

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
    <style type="text/css">
        .logo {
            display: none;
        }
    </style>
    @endpush
    @push('scripts')
    <script>
        $(document).ready(function () {
            $('.logo').fadeToggle(4000, "linear");
        })
    </script>
    @endpush
@endsection
