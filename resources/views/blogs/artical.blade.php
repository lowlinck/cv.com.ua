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
                @include('blogs.inc.blogs.commentSection',['comments' => $artical->comments, 'post_id' => $artical->id])
                <div class="card-footer">


                    <form action="{{ route('comments.store') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="body" placeholder="Type Message..." class="form-control">
                            <input type="hidden" name="artical_id" value="{{ $artical->id }}" />
                            <span class="input-group-append"><button type="submit" class="btn btn-primary">Send</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

