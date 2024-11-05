@extends('layout')
@section('content')
    <main>
        @include('components.veiculos_pesquisa')

        <section class="featured-places">
            <div class="container">
                <div class="row">
                    @foreach($vehicles as $vehicle)
                        @include('components.veiculo_mini_ficha', $vehicle)
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
