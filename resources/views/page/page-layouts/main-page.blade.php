@extends('page.page-layouts.default')

@section('page')

@section('navbar')

@include('shared.nav')

@show
<header class="main">
    <section class="cover">

        <div class="layout-table">
            <div class="layout-row">
                <div class="logo">
                    <h1>Complete Technology Solutions</h1>
                    <p class="lead">
                        Serving the IT Community since 1995
                    </p>
                </div>
            </div>
        </div>


    </section>
</header>
<main>
    @yield('content')
</main>

@include('shared.footer')
@endsection
