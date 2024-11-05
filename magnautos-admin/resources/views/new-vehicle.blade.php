@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{!! __("Novo Veiculo") !!}</h1>
        <p class="mb-2">{!! __("Novo veiculo para o estoque") !!}</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{!! __("Adicionar veiculo") !!}</h6>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{!! route("new.action") !!}" method="post">
                    <div class="col-md-2 mb-2">
                        <label for="inputMake" class="form-label">Fabricante</label>
                        <input type="text" class="form-control" id="inputMake">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputModel" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="inputModel">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputReg" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="inputReg">
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="inputYear" class="form-label">Ano</label>
                        <input type="text" class="form-control" id="inputYear">
                    </div>
                    <div class="col-md-1 mb-2">
                        <label for="inputYearModel" class="form-label">Ano/Modelo</label>
                        <input type="text" class="form-control" id="inputYearModel">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputOdometer" class="form-label">Odometro</label>
                        <input type="text" class="form-control" id="inputOdometer">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputFuel" class="form-label">Combustivel</label>
                        <input type="text" class="form-control" id="inputFuel">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputEngine" class="form-label">Motor</label>
                        <input type="text" class="form-control" id="inputEngine">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputPower" class="form-label">Potencia</label>
                        <input type="text" class="form-control" id="inputPower">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputGearbox" class="form-label">Transmissao</label>
                        <input type="text" class="form-control" id="inputGearbox">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputSeats" class="form-label">Assentos</label>
                        <input type="text" class="form-control" id="inputSeats">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputDoors" class="form-label">Portas</label>
                        <input type="text" class="form-control" id="inputDoors">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputColour" class="form-label">Cor</label>
                        <input type="text" class="form-control" id="inputColour">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputOldPrice" class="form-label">Preco antigo</label>
                        <input type="text" class="form-control" id="inputOldPrice">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputPrice" class="form-label">Preco</label>
                        <input type="text" class="form-control" id="inputPrice">
                    </div>
                    <div class="col-md-2 mb-2">
                        <label for="inputFeatured" class="form-label">Destaque</label>
                        <input type="checkbox" class="form-control" id="inputFeatured">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="inputDescription" class="form-label">Descricao</label>
                        <textarea class="form-control" id="inputDescription"></textarea>
                    </div>



                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
