@extends('page::page-layouts.default')
@section('page')
    @include('shared.nav')
    <header class="index">
        <section class="cover">

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


        </section>
    </header>
    <main>
        <div class="container">
            <div class="row text-center">
                <h1>Welcome Message</h1>
                <p class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aliquid asperiores aspernatur et
                    hic in incidunt, inventore iste iure modi nam natus nihil nisi omnis optio rem repellendus saepe
                    sapiente voluptatum.
                </p>
            </div>
            <hr>
        </div>

    </main>
    <footer class="big-nav">
        <div class="layout-table">
            <div class="layout-row">
                &copy; All right reserved
            </div>
        </div>
    </footer>
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
