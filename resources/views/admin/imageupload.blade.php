@extends('master')
<?php 
use App\Http\Controllers\ImageUploadController;

?>

@section('content')
<section style="padding top:60px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
              Add New Image
            </div>
            <div class="card-body">
              @if (Session::has('image_added'))
              <div class="alert alert-success" role="alert">
                {{Session::get('image_added')}}
              </div>
              @else 

                  
              @endif
     
              <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                  <label for="file">Choose an Image</label>
                  <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                  <img  id="previewImg" alt="image preview" style="max-width:130px;margin-top:20px;" />

                </div>

                <button type="submit" class="btn  btn-primary"> Submit </button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>

</section>

@endsection
<script>
  function previewFile(input) {
    var file = $("input[type=file]").get(0).files[0];
    if(file)
    {
      var reader = new FileReader();
      reader.onload = function(){
        $('#previewImg').attr("src",reader.result);
      }
      reader.readAsDataURL(file);

    }
  }
</script>
  
 
