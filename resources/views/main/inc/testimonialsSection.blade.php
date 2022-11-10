<section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">{{__('testimonials.title')}}</h2>
            </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
        @foreach($testimonails as $testimonail)
        <div>
            <div class="testimonial">

                <blockquote class="mb-5">
                    <p>{{$testimonail->title}}</p>
                </blockquote>

                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="{{$testimonail->image}}" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>{{$testimonail->name}}</p>
                </figure>
            </div>
        </div>
        @endforeach


    </div>
</section>
