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
                        Our really cool elevator pitch goes here!
                    </p>
                </div>
            </div>
        </div>


    </section>
</header>
@yield('content')

@endsection
