<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        @if ($configurations && isset($configurations['footer-logo']))
                            <img src="{{ asset('storage/images/'.$configurations['footer-logo']) }}" alt="Venue Logo">
                        @endif
                    </div>
                    @if ($configurations && isset($configurations['footer_message']))
                    <p>{!! $configurations['footer_message'] !!}</p>
                    @endif
                    <ul class="social-icons">
                        <li>
                            @if ($configurations && isset($configurations['facebook']))
                            <a href="{!! $configurations['facebook'] !!}"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if ($configurations && isset($configurations['instagram']))
                            <a href="{!! $configurations['instagram'] !!}"><i class="fa fa-instagram"></i></a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Mapa do Site</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="{{ route('inicio') }}"><i class="fa fa-stop"></i>Inicio</a></li>
                                <li><a href="{{ route('sobre') }}"><i class="fa fa-stop"></i>Sobre Nos</a></li>
                                <li><a href="{{ route('contato') }}"><i class="fa fa-stop"></i>Fale Conosco</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="{{ route('faq') }}"><i class="fa fa-stop"></i>FAQ</a></li>
                                <li><a href="{{ route('depoimentos') }}"><i class="fa fa-stop"></i>Depoimentos</a></li>
                                <li><a href="{{ route('termos') }}"><i class="fa fa-stop"></i>Termos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Informacoes de contato</h4>
                    </div>
                    @if ($configurations && isset($configurations['endereco']))
                    <p><i class="fa fa-map-marker"></i> {!! $configurations['endereco'] !!}</p>
                    @endif
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
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    @if ($configurations && isset($configurations['copright_message']))
    <p>{!! $configurations['copright_message'] !!}</p>
    @endif
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.11.2.min.js') }}"><\/script>')</script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/datepicker.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
