@extends('blogs.layouts.app')
@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        @include('blogs.inc.therdContent')
        <div class="row">
            <div class="col-md-8">
            @include('blogs.inc.pairedContent')
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                    @include('blogs.inc.widgetCarusel')
                    @include('blogs.inc.widgetList')
                    @include('blogs.inc.widgetCategory')
            </div>
        </div>
    </div>

</main>
@endsection
