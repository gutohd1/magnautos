@extends('layout')
@section('content')
    <section class="banner banner-secondary" id="top" style="background-image: url({!! asset('img/banner-image-1-1920x300.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>Sobre Nos</h4>
                            @if($configurations && isset($configurations['about']))
                                {!! ($configurations['about']) !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        @if($configurations && isset($configurations['about-image']))
                            <img src="{!! asset('storage/images/'.($configurations['about-image'])) !!}" class="img-fluid" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Equipe</span>
                            @if($configurations && isset($configurations['team-header']))
                                <h2>{!! ($configurations['team-header']) !!}</h2>
                            @endif
                        </div>
                    </div>
                </div>
                @if($configurations && isset($configurations['team-data']['formatted']))
                    <div class="owl-carousel owl-theme">
                        @foreach($configurations['team-data']['formatted'] as $employee)
                            @include('components.team-card', ['employee' => $employee])
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
