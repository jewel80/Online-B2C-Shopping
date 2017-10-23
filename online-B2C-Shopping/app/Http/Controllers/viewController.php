<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Mailus;

 
class viewController extends Controller
{
    public function index(){
        //$products=Product::paginate(10);
    	$products=Product::where('productPublication',1)->paginate(8);
        return view('frontEnd.home.homeContent',['products'=>$products]);
    	//return view('frontEnd.category.categoryContent',['products'=>$products]);
    }

    public function category($id){
    	$productCategory= Product::where('subcategoryId',$id)
    						->where('productPublication',1)
    						->get();
    	return view('frontEnd.category.categoryContent',['productCategory'=>$productCategory]);
    }

    public function productDetails($id){
    	$products= Product::where('id',$id)->first();
    	return view('frontEnd.product.productDetails',['products'=>$products]);
    }

    public function mailUs(){
        return view('frontEnd.mailUs.mailUsContent');
    }

    public function mailusSave(Request $request){
        $mailus=new Mailus;
        $mailus->name = $request->name;
        $mailus->email = $request->email;
        $mailus->telephon = $request->telephon;
        $mailus->text = $request->text;
        $mailus->save();
        return redirect('/mail-us')->with('message','This Message Successfully Done !');
    }

    public function searchProduct(Request $request){
        $q = Input::get ( 'q' );
        $products = Product::where('productName','LIKE','%'.$q.'%')
                  ->orWhere('productImage','LIKE','%'.$q.'%')
                  ->orWhere('productPrice','LIKE','%'.$q.'%')
                  ->paginate(8);
        if(count($products) > 0)
            return view('frontEnd.product.productSearch',['products'=>$products])->withDetails($products)->withQuery( $q );
        else 
            return view ('frontEnd.product.productSearch',['products'=>$products])->withMessage('No Details found. Try to search again !');
    }
}
