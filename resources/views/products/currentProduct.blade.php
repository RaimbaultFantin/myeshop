@extends('Layouts.parent')

@section('content')

<div class="container-fluid">
  <div class="row content">
    <div class="col-lg-6">
        <center><img class="img-responsive ttt" src="{{ URL::asset('img/polo-rouge.jpg') }}" alt=""></center>
    </div>
    <div class="col-lg-6 row align-items-center">
      <div class="d-flex flex-column right-side">
        <h4>{{$product->name}}</h4>
        <p class="margin-top-bottom">{{$product->category->name}}</p>
        <p class="margin-top-bottom">Taille : <em>{{$product->size}}</em> </p>
        <h4 class="margin-top-bottom">{{$product->price}}$</h4>
        <h4 class="margin-top-bottom">Description</h4>
        <p>{{$product->description}}</p>
          <div class="row margin-top-bottom ">
            <a class="btn red-hover btn-primary radius d-flex align-items-center green btn-lg" href="#" role="button">
              <div class="marge-right">Acheter</div><img src="{{ URL::asset('img/logolacoste.png') }}" width="50" height="50" alt="" /></a>
          </div>
        
        <p class="margin-top-bottom">Livraison Standard - Offerte dès 80€ d'achat</p>
        <p class="margin-top-bottom">Retours gratuits</p>
        <p class="margin-top-bottom">Retrait 1h en boutique</p>
      </div>
    </div>
  </div>
</div>

@stop