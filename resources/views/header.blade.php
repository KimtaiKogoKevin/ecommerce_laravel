<?php 
use App\Http\Controllers\ShopController;
$total=0;
if(Session::has('user'))
{
  $total = ShopController::cartItem();

}
?>

<!--

  

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  
  <a class="navbar-brand" href="#">CBF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href= "{{route('home')}}">Home <span class="sr-only">(current)</span> </a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="{{route('shop')}}">Shop</a>
        </li>
        
      
      <li class="nav-item ">
        <a class="nav-link"  href="{{route('cartlist')}}">cart({{$total}})</a>
      </li>
     
      <li class="nav-item ">
        <a class="nav-link"  href="{{route('orders')}}">Orders</a>
      </li>
      </ul>

      @if(Session::has('user'))
      <li class="nav-item   dropdown">
       <a class="nav-item dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
         {{Session::get('user')['username']}}
       <span class="caret"></span>
     </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="/logout">Logout</a>
       </div> 
     </li> 
     @else
     <li class="nav-item">
       <a href="">Login</a>
     </li>

     <li class="nav-item ">
      <a  href="{{route('register')}}">Register</a>
      </li>
    
     @endif
</nav>

    
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  
    </div> /.navbar-collapse 
  </div> /.container-fluid 
</nav>
-->

<header>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-12 ">
        <div class="dropdown-meu">
          <div class="btn-group">
            <button class="btn btn-secondary border dropdown-toggle my-md-4 my-2 text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              USD
            </button>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">KSH</a>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-4 col-12 text-center ">
            <h2 class="my-md-3 site-title text-white">CBF</h2>
        </div>


        @if (Session::has('user'))

     <div class="col-12 col-md-4 col-sm-12 text-right">
      <li class="nav-item   dropdown">
        <a class="nav-item dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
      
          {{Session::get('user')['username']}}

    

    
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div> 
      </li> </div>       
            
        @else
       
        <div class="col-md-4 col-12 text-right ">
          <p class="my-md-4 header-links">
            <a href="{{route('login')}}" class="px-2 text-white">Sign in</a>
            <a href="{{route('register')}}" class="px-1 text-white">Create an Account</a>
          </p>
      </div>
            
        
            
        @endif

       

      </div>
    
  </div>

  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('shop')}}">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('orders')}}">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        
      </div>

      <div class="navbar-nav">
        <li class="nav-item border rounded-circle mx-2 search-icon">
          <i class="fas fa-search p-2 "></i>
        </li>
        <li class="nav-item border rounded-circle mx-2 basket-icon">
          <i class="fas fa-shopping-basket p-2 "></i>
        </li>
      </div>
    </nav>

  </div>
</header>


<!-- header -->



