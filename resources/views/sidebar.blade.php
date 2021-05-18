@extends('master')

@section('content')

<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
           <h3>Categories</h3>
           <ul class="lisst-unstyled-components">
               
               <li class="active">
                   <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="flase" class="dropdown-toggle">Zerofly</a>
                   <ul class="collapse lisst-unstyled" id="homeSubmenu">
                       <li>
                           <a href="">Home 1</a>
                       </li>
                       <li>
                           <a href="">Home 2</a>
                       </li>

                   </ul>
               </li>

        <li>
            <a href="">Category 2</a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="flase" class="dropdown-toggle">Dogs</a>
            <ul class="collapse lisst-unstyled" id="pageSubmenu">
                <li>
                    <a href="">Page 1</a>
                </li>
                <li>
                    <a href="">Page 2</a>
                </li>
            </ul>
        </li>
             <li>
                 <a href="">Page 2</a>

             </li>

             <li>
                 <a href="">Page2</a>
             </li>

           </ul>
        </div>
    </nav>
</div>


    
@endsection