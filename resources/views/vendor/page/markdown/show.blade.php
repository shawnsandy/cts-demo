@extends('page.page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="markdown">
                    {!! $markdown['title'] !!}
                    <p class="meta"><small><em>Posted : {{ $markdown['time_ago'] }}</em></small></p>
                    {!! $markdown['content'] !!}
                </article>
            </div>
        </div>
    </div>
@endsection
