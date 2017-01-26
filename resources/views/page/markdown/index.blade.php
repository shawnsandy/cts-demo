@extends('page::page-layouts.default')
@section('title', 'News and Articles')
@section('page')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @each('page::markdown.markdown-posts', collect(MKD::markdownPosts())
                ->sortByDesc('last_modified'), 'post')
            </div>
        </div>
    </div>
@endsection

