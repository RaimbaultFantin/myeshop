@extends('Layouts.parent')

@section('content')
<div class="container-fluid tt">
    <div class="row">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-responsive" src={{URL::asset('img/fond2.png')}} style="width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h2>New Collection</h2>
                    <button type="button" class="green btn radius ">Discover</button>
                </div>
            </div>
        </div>
    </div>
    <div class="top-sales">
    <h3 class="bold">Offshop recomands you</h3>
        <div class="row justify-content-around">
            <div class="card">
                <img class="card-img-top" src="{{URL::asset('img/bonnet.png')}}" alt="Card image cap">
                <div class="body-card">
                    <h5 class="card-title">Black Hat Lacoste</h5>
                    <p class="card-text">$40</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{URL::asset('img/bonnet.png')}}" alt="Card image cap">
                <div class="body-card">
                    <h5 class="card-title">Black Hat Lacoste</h5>
                    <p class="card-text">$40</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{URL::asset('img/bonnet.png')}}" alt="Card image cap">
                <div class="body-card">
                    <h5 class="card-title">Black Hat Lacoste</h5>
                    <p class="card-text">$40</p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="{{URL::asset('img/bonnet.png')}}" alt="Card image cap">
                <div class="body-card">
                    <h5 class="card-title">Black Hat Lacoste</h5>
                    <p class="card-text">$40</p>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop

@section('scripts')
@stop