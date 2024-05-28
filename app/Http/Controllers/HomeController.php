<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // Sert à récuperer le Slider de la BD vers la vue
        $sliders = Slider::all();

        // Sert à récuperer les produits de la BD en fonction de la catégorie
        $iphones = Product::where("isIphone", "=", "true")->orderBy("id", "desc")->get();
        $samsungs = Product::where("isSamsung", "=", "true")->orderBy("id", "desc")->get();
        $huaweis = Product::where("isHuawei", "=", "true")->orderBy("id", "desc")->get();
        $availables = Product::where("isAvailable", "=", "true")->orderBy("id", "desc")->get();

        // Transmet les données récuperer (slider , et les catégories) à la vue
        return view('index' , [
            'sliders'=>$sliders, 
            'iphones'=>$iphones , 
            'samsungs'=>$samsungs , 
            'huaweis'=>$huaweis , 
            'availables'=>$availables,
        ]);

    }

    public function contact(){
        return view('contact');
    }

    public function showProduct(string $slug){
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('store.showProduct' , ["product" => $product]) ;
    }
}
