@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-9 text-left">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">{!! __("Veiculos") !!}</h1>
                <p class="mb-1">{!! __("Veiculos em estoque aparecerao aqui") !!}</p>
            </div>
            <div class="col-md-3 text-right">
                <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                    <div class="dropdown mr-1">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text">{!! __("Adicionar veiculo") !!}</span>
                        </button>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                            <a class="dropdown-item" href="{!! route('new.form') !!}">{!! __("Adicionar individual") !!}</a>
                            <a class="dropdown-item" href="#">{!! __("Adicionar multiplos") !!}</a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">{!! __("Excluir") !!}</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{!! __("Estoque") !!}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{!! __("Fabricante") !!}</th>
                                <th>{!! __("Modelo") !!}</th>
                                <th>{!! __("Placa") !!}</th>
                                <th>{!! __("Tipo") !!}</th>
                                <th>{!! __("Ano") !!}</th>
                                <th>{!! __("Ano/Modelo") !!}</th>
                                <th>{!! __("Odometro") !!}</th>
                                <th>{!! __("Combustivel") !!}</th>
                                <th>{!! __("Cor") !!}</th>
                                <th>{!! __("Preco") !!}</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>{!! __("Fabricante") !!}</th>
                                <th>{!! __("Modelo") !!}</th>
                                <th>{!! __("Placa") !!}</th>
                                <th>{!! __("Tipo") !!}</th>
                                <th>{!! __("Ano") !!}</th>
                                <th>{!! __("Ano/Modelo") !!}</th>
                                <th>{!! __("Odometro") !!}</th>
                                <th>{!! __("Combustivel") !!}</th>
                                <th>{!! __("Cor") !!}</th>
                                <th>{!! __("Preco") !!}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @if($vehicles)
                            @foreach($vehicles as $vehicle)
                                <tr>
                                    <td>{!! $vehicle->make->name !!}</td>
                                    <td>{!! $vehicle->model !!}</td>
                                    <td>{!! $vehicle->reg !!}</td>
                                    <td>{!! $vehicle->type !!}</td>
                                    <td>{!! $vehicle->year !!}</td>
                                    <td>{!! $vehicle->year_model !!}</td>
                                    <td>{!! $vehicle->odometer !!}</td>
                                    <td>{!! $vehicle->fuel->name !!}</td>
                                    <td>{!! $vehicle->colour !!}</td>
                                    <td>{!! $vehicle->price !!}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
