{{--<section class="comment-section">--}}
{{--    <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>--}}
{{--    <form action="/" method="post">--}}
{{--        <div class="row">--}}
{{--            <div class="form-group col-12" data-aos="fade-up">--}}
{{--                <label for="comment" class="sr-only">Comment</label>--}}
{{--                <textarea name="comment" id="comment" class="form-control" placeholder="Comment" rows="10">Comment</textarea>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="form-group col-md-4" data-aos="fade-right">--}}
{{--                <label for="name" class="sr-only">Name</label>--}}
{{--                <input type="text" name="name" id="name" class="form-control" placeholder="Name*">--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-4" data-aos="fade-up">--}}
{{--                <label for="email" class="sr-only">Email</label>--}}
{{--                <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required>--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-4" data-aos="fade-left">--}}
{{--                <label for="website" class="sr-only">Website</label>--}}
{{--                <input type="url" name="website" id="website" class="form-control" placeholder="Website*">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-12" data-aos="fade-up">--}}
{{--                <input type="submit" value="Send Message" class="btn btn-warning">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</section>--}}
{{--@foreach($comments as $comment)--}}
{{--    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>--}}
{{--        <strong>{{ $comment->user->name }}</strong>--}}
{{--        <p>{{ $comment->body }}</p>--}}
{{--        <a href="" id="reply"></a>--}}
{{--        <form method="post" action="{{ route('comments.store') }}">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <input type="text" name="body" class="form-control" />--}}
{{--                <input type="hidden" name="post_id" value="{{ $post_id }}" />--}}
{{--                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <input type="submit" class="btn btn-warning" value="Reply" />--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        @include('blogs.inc.blogs.commentSection', ['comments' => $comment->replies])--}}
{{--    </div>--}}
{{--@endforeach--}}


@foreach($comments as $comment)
    @foreach($comments as $comment)
        <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
            <strong>{{ $comment->user->name }}</strong>
            <p>{{ $comment->body }}</p>
            <a href="" id="reply"></a>
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="body" class="form-control" />
                    <input type="hidden" name="artical_id" value="{{ $post_id }}" />
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Reply" />
                </div>
            </form>
            @include('blogs.inc.blogs.commentSection', ['comments' => $comment->replies])
        </div>
    @endforeach
@endforeach
