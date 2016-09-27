@extends('page::page-layouts.default')
@section('page')

    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                @include('page::page-layouts.shared.sidebar-nav')

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="admin-nav">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell branding">
                            <h4 class="text-uppercase">

                                PageKit
                                <small>Admin Starter</small>
                            </h4>
                        </div>
                        <div class="tbl-cell profile text-right">
                            <p>
                                Shawn Sandy
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="dashboard-wrapper">
                <div class="tbl">
                    <div class="tbl-cell tbl-top dashboard">
                        <main class=""> @yield('content')</main>
                    </div>
                    <div class="tbl-cell tbl-top dashboard-sidebar">
                        <div class="">
                            <h3 class="text-uppercase"><i class="material material_info_outline"></i></h3>
                            <p>PageKit admin starter is an easy to use bootstrap compatible admin dashboard created to
                                help you build better backends for your laravel applications. Please visit our
                                <a href="//github.com/shawnsandy/pagekit">Github page for setup instructions.</a></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /#page-content-wrapper -->
    </div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('/css/pagekit/admin-v2.css') }}">
@endpush
@push('scripts')
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('.toggle-btn').toggleClass('closed');
    });
</script>
@endpush

