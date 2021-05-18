@extends('master')

@section('content')

    <!-- side bar  -->


<!------ Include the above in your HEAD tag ---------->
<div class="pull-right">
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
</div>
    
            
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
     
</div>
   
        



@endsection



<script>
    $(document).ready(function(){
        $("#sidebarCollapse").on('click',function(){
            $("#sidebar").toggleClass('active');
        })
    })
</script>

