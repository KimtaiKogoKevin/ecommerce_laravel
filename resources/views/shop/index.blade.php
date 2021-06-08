{{--@extends('master') 

@section('content')

--}}

    <!-- side bar  -->


<!------ Include the above in your HEAD tag ---------->
{{-- <div class="pull-right">
    <div class="btn-group">
        <button class="btn btn-info" id="list">
            List View
        </button>
        <button class="btn btn-danger" id="grid">
            Grid View
        </button>

        <button type="button" id="sidebarCollapse" class="btn btn-info">
         <i class="fa fa-align-left"></i>
         <span>View Categories</span>
        </button>

        
    </div>
</div> --}}
    
{{--             
<div class="wrapper">
         <!-- -->
         <!-- -->
          <nav id="sidebar">
                <div class="sidebar-header">

                   <h3>Categories</h3>
                </div>
                @foreach ($categories as $category)
                    
                   <ul class="list-unstyled-components">
                       
                       <li class="active">
                           <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="flase" class="dropdown-toggle">{{$category['name']}}</a>
                           @if ($category->children)
                           <ul class="collapse list-unstyled" id="homeSubmenu">
                               @foreach ($category->children as $child)
                               <li>
                                <a href="">{{$child->name}}</a>
                               </li>
                              @endforeach
                        </ul>
                               
                           @endif
                           
                       </li>
        
        
                   </ul>

                @endforeach

                
            </nav>
        


    <!-- -->

    <div class="content">
  @foreach ($products as $item)

<div id="products" class="row view-group">
    <div class="col-lg-12 my-3">
     

        <div class="item col-xs-12 col-lg-12 col-lg-12">
            <div class="thumbnail card">
                <div class="img-event">
                        <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                </div>
                    <div class="caption card-body">
                        <h4 class="group card-title inner list-group-item-heading">{{$item['name']}}</h4>
                        <p class="group inner list-group-item-text">KSH{{$item['price']}} </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <p class="lead">  {{$item['description']}} </p>
                            </div>
                            <div class="col-xs-12 col-md-12 col-lg-12">
                                <a class="btn btn-success" href="{{route('shop.details',$item->id)}}">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

        

        @endforeach
    </div>
        <!-- -->
     
</div> --}}
   
  <!--css link -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">


  <!-- Navigation -->
  <nav class="nav">
    <div class="navigation container">
        <div class="logo">
            <h1>CBF</h1>
        </div>

        <div class="menu">
            <div class="top-nav">
                <div class="logo">
                    <h1>CBF</h1>
                </div>
                <div class="close">
                    <i class="bx bx-x"></i>
                </div>
            </div>

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product.html" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="account.html" class="nav-link">Account</a>
                </li>
                <li class="nav-item">
                    <a href="cart.html" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                </li>
            </ul>
        </div>

        <a href="cart.html" class="cart-icon">
            <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
            <i class="bx bx-menu"></i>
        </div>
    </div>
</nav>
  
   <!-- All Products -->
   <section class="section all-products" id="products">
    <div class="top container">

        <h1>All Products</h1>
  @foreach ($products as $item)

        {{-- <form>
            <select>
                <option value="1">Defualt Sorting</option>
                <option value="2">Sort By Price</option>
                <option value="3">Sort By Popularity</option>
                <option value="4">Sort By Sale</option>
                <option value="5">Sort By Rating</option>
            </select>
            <span><i class='bx bx-chevron-down'></i></span>
        </form> --}}
    </div>

    <div class="product-center container">
        <div class="product">
            <div class="product-header">
                <img src="./images/pic1.jpg" alt="">
                <ul class="icons">
                    <span><i class="bx bx-heart"></i></span>
                    <a href="cart.html"> <span><i class="bx bx-shopping-bag"></i></span>
                    </a>
                    <span><i class="bx bx-search"></i></span>
                </ul>
            </div>
            <div class="product-footer">
                <a href="product-details.html">
                    <h3>{{$item['name']}}</h3>
                </a>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <h4 class="price">{{$item['price']}}</h4>
            </div>
        </div>
        
       
        
    </div>
    @endforeach

</section>

{{-- <section class="pagination">
    <div class=" container">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span><i class='bx bx-right-arrow-alt'></i></span>
    </div>
</section> --}}



{{-- @endsection --}}



{{-- <script>
    $(document).ready(function(){
        $("#sidebarCollapse").on('click',function(){
            $("#sidebar").toggleClass('active');
        })
    })
</script> --}}

