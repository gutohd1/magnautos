<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button id="primary-nav-button" type="button">Menu</button>
                <a href="{{ route('inicio') }}"><div class="logo">
                        @if ($configurations && isset($configurations['logo']))
                            <img src="{{ asset('storage/images/'.$configurations['logo']) }}" alt="Venue Logo">
                        @endif
                    </div></a>
                <nav id="primary-nav" class="dropdown cf">
                    <ul class="dropdown menu">
                        <li class='{{ Request::is('/')?'active':'' }}'><a href="{{ route('inicio') }}">Inicio</a></li>

                        <li class="{{ Request::is('estoque')?'active':'' }}">
                            <a href="{{ route('estoque') }}">Estoque</a>
                        </li>

                        <li>
                            <a href="#">Institucional</a>
                            <ul class="sub-menu">
                                <li class="{{ Request::is('sobre-nos')?'active':'' }}">
                                    <a href="{{ route('sobre') }}">Sobre Nos</a>
                                </li>
                                <li class="{{ Request::is('depoimentos')?'active':'' }}">
                                    <a href="{{ route('depoimentos') }}">Depoimentos</a>
                                </li>
                                <li class="{{ Request::is('faq')?'active':'' }}">
                                    <a href="{{ route('faq') }}">FAQ</a>
                                </li>
                                <li class="{{ Request::is('termos')?'active':'' }}">
                                    <a href="{{ route('termos') }}">Termos</a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('fale-conosco')?'active':'' }}">
                            <a class="nav-link" href="{{ route('contato') }}">Fale Conosco</a>
                        </li>
                    </ul>
                </nav><!-- / #primary-nav -->
            </div>
        </div>
    </div>
</header>
