<section class="site-section bg-light" id="pricing-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="section-title mb-3">Pricing</h2>
            </div>
        </div>
        <div class="row mb-5">
            @foreach($prices as $price)
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                <div class="pricing">
                    <h3 class="text-center text-black">{{$price->title}}</h3>
                    <div class="price text-center mb-4 ">
                        <span>{{$price->price}}</span>
                    </div>
                    <ul class="list-unstyled ul-check success mb-5">
                        <li>{{$price->service1}}</li>
                        <li>{{$price->service2}}</li>
                        <li>{{$price->service3}}</li>
                        <li>{{$price->service4}}</li>

                    </ul>
                    <p class="text-center">
                        <a href="#" class="btn btn-secondary">{{__('price.button')}}</a>
                    </p>
                </div>
            </div>
            @endforeach


        </div>

        @include('main.inc.faq')
    </div>
</section>
