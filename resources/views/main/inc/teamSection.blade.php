<section class="site-section border-bottom" id="team-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">{{__('team.title')}}</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">{{__('team.undertitle')}}</p>
            </div>
        </div>
        <div class="row">
            @foreach($teams as $team)
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="{{(rand(1,8))*100}}">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="{{$team->flink}}"><span class="icon-facebook"></span></a></li>
                            <li><a href="{{$team->twitlink}}"><span class="icon-twitter"></span></a></li>
                            <li><a href="{{$team->inlink}}"><span class="icon-linkedin"></span></a></li>
                            <li><a href="{{$team->instalink}}"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset($team->imagepath)}}" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3>Kaiara Spencer</h3>
                        <span class="position">Product Manager</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
