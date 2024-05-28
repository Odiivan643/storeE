<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(CartService $cartService){
        //  pour avoir le details du cartService ou panier 
        $cart =  $cartService->getCartDetails();

        return view('store.cart' , ['cart'=>$cart]);
    }

    public function addToCart(CartService $cartService , $productId){
        // pour ajouter les articles au panier 
        $cartService->addToCart($productId, 1) ;

        // pour avoir le details du cartService ou panier 
        $cart =  $cartService->getCartDetails();

        return redirect()->route('cart' , ['cart'=>$cart]);
    }

    public function removeFromCart(CartService $cartService , $productId, $quantity){
        // pour ajouter les articles au panier 
        $cartService->removeFromCart($productId, $quantity) ;

        // pour avoir le details du cartService ou panier 
        $cart =  $cartService->getCartDetails();
        // dd($cart);
        return redirect()->route('cart' , ['cart'=>$cart]);

    }
}
