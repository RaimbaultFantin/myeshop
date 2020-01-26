@extends('Layouts.default')

@section('content')

<h1>Liste article</h1>
    <div class="list-group">
      <!-- <a href="{{ route('men',100)}}"><button class="btn btn-primary">Afficher prix > 100$</button></a> -->
        @foreach ($products as $product)
        <a href="{{ route('show', $product->slug)}}"><p>Nom de l'article : {!! $product->name !!}</p></a>
        @endforeach
  </div>

@stop

