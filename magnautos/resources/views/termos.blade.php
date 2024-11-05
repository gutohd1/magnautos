@extends('layout')
@section('content')
    <section class="banner banner-secondary" id="top" style="background-image: url({!! asset("img/banner-image-3-1920x300.jpg") !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Termos e Condicoes</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places">
            <div class="container">
                @if($configurations && isset($configurations['terms']))
                    {!! ($configurations['terms']) !!}
                @endif
            </div>
        </section>

        @include('components.contato_section')
    </main>
@endsection
