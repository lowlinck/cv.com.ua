@extends('blogs.layouts.app')
@section('content')

<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$artical->title}}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{$artical->autor}}</p>
        @include('blogs.inc.blogs.imageSection')
        @include('blogs.inc.blogs.contentSection')

        <div class="row">
            <div class="col-lg-9 mx-auto">
                @include('blogs.inc.blogs.realetedSection')
                @include('blogs.inc.blogs.commentSection')
            </div>
        </div>
    </div>
</main>
@endsection

