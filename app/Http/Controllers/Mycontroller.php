<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
  public function Home(){
      return view('home');
  }
  

    public function Product(){
        return view('products')->with('products',Product::all());
    }

public function About(){
    return view('about');
}


public function cart(){
    
    return view('cart');
}

public function addProduct(){
    return view('addproduct');
}
public function createproduct(Request $request){

    $post=new Product();
    $post->name=$request->name;
    $post->description=$request->description;
    $post->image=$request->image;
    $post->price=$request->price;
    $post->save();
    //return back();
    return back()->with('post_created ','post created has been succesfully!');
    }





    public function addTocart(Product $product){
        $cart=session()->get('cart');
        if(!$cart){
            $cart=[
                $product->id=>$this->sessionData($product)
    

               
            ];
            return $this->setSessionAndReturn($cart);
    
           
    
        }
        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            return    $this->setSessionAndReturn($cart);
          
        }
        $cart[$product->id]=$this->sessionData($product);
    
        return   $this->setSessionAndReturn($cart);
    
       
            }
    
            public function removeFromcart($id){
                $cart=session()->get('cart');
                if(isset($cart[$id])){
                    unset($cart[$id]);
                    session()->put('cart',$cart);
    
                }
                return redirect()->back()->with('success','Remove from cart');
            }
    
            protected  function sessionData(Product $product){
               return  [
                    'name'=>$product->name,
                    'quantity'=>1,
                    'price' =>$product->price,
                    'image'=>$product->image
                ];
            }
    
            protected function setSessionAndReturn($cart){
                session()->put('cart',$cart);
                   return redirect()->route('cart')->with('success','added to cart');
                     }
            }
        
    
    
    
    
    

