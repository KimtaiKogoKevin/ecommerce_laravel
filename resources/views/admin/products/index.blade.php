<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{ config('app.name') }}</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
       <!-- -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <!-- scripts for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- -->

      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="{{ route('shop') }}">{{ config('app.name') }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('shop') }}">Shop <span class="sr-only">(current)</span></a>
                  </li>
              </ul>

              <a href="{{ route('product.create') }}" class="btn btn-success my-2 my-sm-0">Create Product</a>
          </div>
      </nav>
      <div class="container py-3">
          <div class="row">
              
              @foreach ($product as $item)
              <div class="col-md-4">
                <div class="card">
                    
                    <div class="card-header">
                        <h3>{{$item->name}} </h3>
                        <p class="text-muted">{{ $item->category ? $item->category->name : 'Uncategorized' }}</p>
                    </div>
                    <div class="card-body">
                        <h3>{{$item->price}} </h3>
                    </div>
                    <div class="card-body">
                        <h3>{{$item->slug}} </h3>
                    </div>
                   
                    <div class="card-body">
                    <p>{{substr($item->description,0,100)}}</p>
                        <a href="{{ route('product.show', $item->slug) }}" class="btn btn-primary btn-block">View Product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                  
              
             
      </div>
  </body>

</html>