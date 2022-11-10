<section class="site-section" id="portfolio-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">{{__('portfolio.title')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <button class="btn btn-primary active" data-filter="*">{{__('portfolio.all')}}</button>
                <button class="btn btn-primary" data-filter=".landing">{{__('portfolio.landing')}}</button>
                <button class="btn btn-primary" data-filter=".shop">{{__('portfolio.shop')}}</button>
                <button class="btn btn-primary" data-filter=".blog">{{__('portfolio.blog')}}</button>
            </div>
        </div>
        <div id="posts" class="row no-gutter">
            @foreach($portfolios as $portfolio)
            <div class="item {{$portfolio->filtername}} col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="{{($portfolio->linktoweb)}}" class="item-wrap " >
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{asset($portfolio->imagepath)}}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
