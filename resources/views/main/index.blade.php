@extends('layouts.app')
@section('container')
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
    @include('main.inc.header')
    @include('main.inc.homeSection')
    @include('main.inc.aboutFastlink')
    @include('main.inc.teamSection')
    @include('main.inc.portfolioSection')
{{--    @include('main.inc.servicesSection')--}}
    @include('main.inc.testimonialsSection')
    @include('main.inc.pricingSection')

    @include('main.inc.blogSection')
    @include('main.inc.contactSection')
    @include('main.inc.footer')
</div>
@endsection
