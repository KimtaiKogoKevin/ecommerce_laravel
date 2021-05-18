<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
  


    public function index()
    {
        # code...
        $data= Product::all();
        $Categories = Category::with('children')->whereNull('parent_id')->get();
        return view('shop.index', ['products'=>$data , 'categories'=>$Categories]);
    }

    function detail($id)
    {
        $data= Product::find($id);

        $Categories = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.category_id')

            ->select('categories.*', 'categories.name', )
            ->first();
       
        return view('shop.details', ['details'=>$data ,'categories'=>$Categories]);

    }

    function search(Request $req)
    {
    $data = Product::where('name','like','%'.$req->input('query').'%')->get();

    return view('search' , ['products'=>$data]);


    }

    function addtocart(Request $req)
    {
        if ($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
        return redirect ('/shop');
        }
    
    else 
     {
    return redirect ('/login');
     }
    }

   static function cartitem () 
   {
        $userId= Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
   }

   public function cartlist ()

   {
     
       $userId= Session::get('user')['id'];
       $products= DB::table('cart')
       ->join('products','cart.product_id' , '=' ,'product_id')
       ->where('cart.user_id',$userId)
       ->select('products.*', 'cart.id as cart_id')
       ->get();
       

       return view('shop.cartlist',['products'=>$products]);
   }

   function removecartitem($id){
       Cart::destroy($id);
       return redirect('cartlist');
   }

  public function checkout(){

    $userId= Session::get('user')['id'];
    $total= DB::table('cart')
    ->join('products','cart.product_id' , '=' ,'products.id')
    ->where('cart.user_id',$userId)
    ->sum('products.price');

    return view('shop.checkout',['total'=>$total]);

   }

   function placeorder(Request $req)
   {
    $userId= Session::get('user')['id'];
       $allCart = Cart::where('user_id',$userId)->get();

       foreach ($allCart as $cart) {
           $order=new Order;
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->status="pending";
           $order->payment_method=$req->payment;
           $order->payment_status="pending";
           $order->address=$req->address;
           $order->save();
           Cart::where('user_id',$userId)->delete();
         }
       $req->input();
       return redirect('/shop');

   }

   function orders()
   {
    $userId= Session::get('user')['id'];
    $orders= DB::table('orders')
    ->join('products','orders.product_id' , '=' , 'products.id')
    ->where('orders.user_id',$userId)
    ->get();

    return view('shop.orders',['orders'=>$orders]);
   }

   
     

}
