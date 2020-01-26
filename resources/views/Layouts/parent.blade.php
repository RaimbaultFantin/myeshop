<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="Instyle Fashion HTML Template">
  	<meta name="keywords" content="instyle, fashion, html">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>OFFSHOP</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/reactpage.css') }}" rel="stylesheet">
  </head>

  <body>
		   <nav id="navbar" class="container-fluid d-flex align-items-center">
           <a class="col-lg-2 text-center" href="{{ url('home/')}}">
               <center><img src="{{ URL::asset('img/logo.png') }}" width="50" height="50" alt=""></center>
			        <span>OFFSHOP</span>
           </a>
           <div class="col-lg-8 d-flex justify-content-center" >
               <h5 class="marge-right">
                   <a a href="{{ url('men/')}}">Homme</a>
               </h5>
               <h5 class="marge-left">
                   <a a href="{{ url('women/')}}">Femme</a>
               </h5>
           </div>
           <div class="col-lg-2 text-center" >
               <h4>Panier</h4>
           </div>
       </nav>
       @yield('content')

       <footer>
         <div class="container-fluid black">
           <div class="row justify-content-center">
            <div class="jumbotron bottom-zero black" style="width: 80%">
              
                <center><a href="{{ url('home/')}}"><img src="{{ URL::asset('img/logolacoste.png') }}" width="150" height="150" alt="" /></a></center>
              <div class="row justify-content-around">
                <h6>Facebook</h6>
                <h6>Twitter</h6>
                <h6>Instagram</h6>
              </div>
              <p class="text-center">just do it because after it will be too late ...</p>
              <p class="lead text-center">
                <a class="btn red-hover btn-primary green btn-lg" href="#" role="button">Learn more</a>
              </p> 
            </div>
           </div>
         </div>
       </footer>

  </body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @yield('scripts')
</html>
