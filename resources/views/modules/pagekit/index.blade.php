@extends('pagekit::layouts.default')

@section('page')
<section class="cover">
    <div class="layout-table">
        <div class="layout-row">
            <div class="logo">
            <h1>Page Kit for Laravel</h1>
               <p class="lead">
               	Starter pages for your Laravel App.....
               </p>
               <p>
        	<a class="btn link-btn" href="/pagekit/about">About</a>
        	<a class="btn link-btn" href="/pagekit/contact">Contact</a>
        </p>

            </div>
        </div>
    </div>
</section>

<footer class="big-nav">
    <div class="layout-table">
        <div class="layout-row">

        <p>&copy; All Rights Reserved</p>

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
    $(document).ready(function(){
        $('.logo').fadeToggle( 4000, "linear" );
    })
</script>
@endpush
@endsection
