<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    { 
        $latestproducts = Product::latest()->take(4)->get();
        return view('welcome',compact('latestproducts'));
    }
    
        public function about()
        {
            return view('about');
        }
        public function contact()
        { 
            return view ('contact');
        }
        public function sells()
        {
            return view ('sells');
        }
        public function categoryproduct($id)
        {
            $category = Category::findOrFail($id);
            $products = product::where('category_id',$id)->latest()->get();
            return view('categoryproduct',compact('category','products'));

        }
        public function viewproduct($id)
        {
            $product = Product::findorfail($id);
            $relatedproducts = product::where('category_id',$product->category_id)
            ->where('id','!=',$id)
            ->latest()
            ->take(4)
            ->get();
            return view('viewproduct',compact('product','relatedproducts'));
        }
    
}
