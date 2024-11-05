@extends('layout')
@section('content')
    <section class="banner banner-secondary" id="top" style="background-image: url({!! asset('img/banner-image-1-1920x300.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>{!! $vehicle->model !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div>
                      <img src="{!! asset('img/product-1-720x480.jpg') !!}" alt="" class="img-responsive wc-image">
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-1-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-2-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-3-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>

                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-4-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-5-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-6-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>

                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-4-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-5-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-sm-4 col-xs-6">
                        <div class="form-group">
                            <img src="{!! asset('img/product-6-720x480.jpg') !!}" alt="" class="img-responsive">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-xs-12">
                    <form action="#" method="post" class="form">
                      <h2>
                          @if($vehicle->old_price != null)
                              <small><del> R$: {!! $vehicle->old_price !!}</del></small>
                          @endif
                          <strong class="text-primary">R$: {!! $vehicle->price !!}</strong></h2>

                      <br>

                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <div class="clearfix">
                                 <span class="pull-left">Condicao</span>
                                     <strong class="pull-right">{!! $vehicle->condition() !!}</strong>
                              </div>
                          </li>

                          <li class="list-group-item">
                               <div class="clearfix">
                                     <span class="pull-left">Fabricante</span>

                                     <strong class="pull-right">{!! $vehicle->make->name !!}</strong>
                               </div>
                          </li>

                          <li class="list-group-item">
                               <div class="clearfix">
                                     <span class="pull-left">Modelo</span>

                                     <strong class="pull-right">{!! $vehicle->model !!}</strong>
                               </div>
                          </li>

                          <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Ano</span>
                                   <strong class="pull-right">{!! $vehicle->year !!}</strong>
                               </div>
                          </li>

                          <li class="list-group-item">
                              <div class="clearfix">
                                  <span class="pull-left">Ano/Modelo</span>
                                  <strong class="pull-right">{!! $vehicle->year_model !!}</strong>
                              </div>
                          </li>

                          <li class="list-group-item">
                              <div class="clearfix">
                                 <span class="pull-left">Quilometragem</span>
                                 <strong class="pull-right">{!! $vehicle->odometer !!}</strong>
                              </div>
                          </li>

                          <li class="list-group-item">
                                <div class="clearfix">
                                     <span class="pull-left">Combustivel</span>

                                     <strong class="pull-right">{!! $vehicle->fuel->name !!}</strong>
                                </div>
                          </li>

                          <li class="list-group-item">
                                <div class="clearfix">
                                     <span class="pull-left">Motor</span>

                                     <strong class="pull-right">{!! $vehicle->engine !!}cc</strong>
                                </div>
                          </li>

                          <li class="list-group-item">
                                <div class="clearfix">
                                     <span class="pull-left">Potencia</span>

                                     <strong class="pull-right">{!! $vehicle->power !!}hp</strong>
                                </div>
                          </li>


                          <li class="list-group-item">
                                <div class="clearfix">
                                     <span class="pull-left">Transmissao</span>

                                     <strong class="pull-right">{!! $vehicle->gearbox->name !!}</strong>
                                </div>
                          </li>

                          <li class="list-group-item">
                              <div class="clearfix">
                                  <span class="pull-left">Lugares</span>
                                  <strong class="pull-right">{!! $vehicle->seats !!}</strong>
                              </div>
                          </li>

                          <li class="list-group-item">
                              <div class="clearfix">
                                  <span class="pull-left">Portas</span>
                                  <strong class="pull-right">{!! $vehicle->doors !!}</strong>
                              </div>
                          </li>

                          <li class="list-group-item">
                              <div class="clearfix">
                                  <span class="pull-left">Cor</span>
                                  <strong class="pull-right">{!! $vehicle->colour !!}</strong>
                              </div>
                          </li>
                    </ul>

                      <div class="accordions">
                            <ul class="accordion">
                                <li>
                                    <a class="accordion-trigger">Descricao do veiculo</a>
                                    <div class="accordion-content">
                                        <p>{!! nl2br(e($vehicle->description)) !!}</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="accordion-trigger">Extras</a>

                                    <div class="accordion-content">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <p>ABS</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Leather seats</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Power Assisted Steering</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Electric heated seats</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>New HU and AU</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Xenon headlights</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul> <!-- / accordion -->
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
    </main>
@endsection
