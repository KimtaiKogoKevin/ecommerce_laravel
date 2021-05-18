@extends('master')


@section('content')



    <!-- first slider -->
<div class="container-fluid p-0"> 
        <div  class="site-slider">
        <div class="slider-one">
            <div> 
                <img src="{{asset('images/storagebag.png')}}" class="img-fluid"  alt="slider image">
                 </div>
                <div> 
                <img src="{{asset('images/storagebag.png')}}"  class="img-fluid" alt="slider image">
                 </div>
        </div>
        <div class="slider-btn">
        <button type="button" class="prev position-top"><i class="fas fa-chevron-left"></i></button>
        <button type="button" class="next position-top right-0"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>

    <!-- !first slider -->
 

@endsection
