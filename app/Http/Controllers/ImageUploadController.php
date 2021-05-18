<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Session;


class ImageUploadController extends Controller
{
    public function index()
    {
        return view('admin.imageupload');
    }
  
    public function store(Request $request)
    {
       $name = $request->name;
       $image = $request->file('file');
       $imageName = time().'.'.$image->extension();
       $image->move(public_path('images'),$imageName);

       $photo =  new Photo();
       $photo->name =$name;
       $photo->image = $imageName;
       $photo->save();

       session()->put('image_added', 'Upload success!');

       return redirect()->back()->withInput();


 
            
    }
}
