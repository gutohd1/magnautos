@if(count($vehicles) > 0)
    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Veiculos em destaque</span>
                        <h2>Nossos destaques do mes.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($vehicles as $vehicle)
                    @include('components.veiculo_mini_ficha', $vehicle)
                @endforeach
            </div>
        </div>
    </section>
@endif
