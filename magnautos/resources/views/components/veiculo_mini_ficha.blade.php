<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="featured-item">
        <div class="thumb">
            <div class="thumb-img">
                <img src="{{ asset('img/product-1-720x480.jpg') }}" alt="">
            </div>
            <div class="overlay-content">
                <strong><i class="fa fa-dashboard"></i> {!! $vehicle->odometer !!}km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong><i class="fa fa-cube"></i> {!! $vehicle->engine !!} cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong><i class="fa fa-cog"></i> {!! $vehicle->gearbox->name !!}</strong>
            </div>
        </div>
        <div class="down-content">
            <h4>{!! $vehicle->model !!}</h4>

            <br>

            <p>{!! $vehicle->power !!} hp  /  {!! $vehicle->fuel->name !!}  /  {!! $vehicle->year !!}  /  {!! $vehicle->condition() !!}</p>

            <p>
                <span>
                    @if($vehicle->old_price !== null)
                    <del><sup>R$:</sup>{!! $vehicle->old_price !!} </del>
                    @endif
                        <strong><sup>R$:</sup>{!! $vehicle->price !!}</strong>
                </span>
            </p>

            <div class="text-button">
                <a href="{{ route('detalhes', $vehicle) }}">Ver mais</a>
            </div>
        </div>
    </div>
</div>
