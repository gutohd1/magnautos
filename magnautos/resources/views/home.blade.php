@extends('layout')
@section('content')
    <section class="banner" id="top" style="background-image: url({!! asset('img/homepage-banner-image-1920x700.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                        <div class="blue-button">
                            <a href="contact.html">Fale Conosco</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        @include('components.destaques')
        @include('components.depoimentos_section')
    </main>
@endsection
