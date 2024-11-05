@extends('layout')
@section('content')
    <section class="banner banner-secondary" id="top" style="background-image: url({!! asset('img/banner-image-3-1920x300.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Fale Conosco</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Seu Nome..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Assunto..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Sua mensagem..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <div class="blue-button">
                                                <a href="#" id="form-submit" class="btn">Enviar Mensagem</a>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium.</p>
                                            <ul>
                                                @if($configurations)
                                                    @if(isset($configurations['phone']))
                                                        <li><span>Telefone:</span><a href="tel:{!! $configurations['phone']['value'] !!}">{!! $configurations['phone']['formatted'] !!} </a></li>
                                                    @endif
                                                    @if(isset($configurations['mobile']))
                                                        <li><span>Celular:</span><a href="tel:{!! $configurations['mobile']['value'] !!}">{!! $configurations['mobile']['formatted'] !!} </a></li>
                                                    @endif
                                                    @if(isset($configurations['email']))
                                                        <li><span>Email:</span><a href="mailto:{!! $configurations['email'] !!}">{!! $configurations['email'] !!} </a></li>
                                                    @endif
                                                    @if ($configurations && isset($configurations['endereco']))
                                                        <li><span>Endereco:</span><i class="fa fa-map-marker"></i> {!! $configurations['endereco'] !!}</li>
                                                    @endif
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('components.depoimentos_section')
    </main>
@endsection
