<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Manufacturer;
use App\Product;
use DB;

class productController extends Controller
{
    public function addProduct(){
        //$categories= Category::where('categoryPublication',1)->get();
    	$Subcategory= Subcategory::where('subcategoryPublication',1)->get();
    	$manufacturers= Manufacturer::where('manufacturerPublication',1)->get();
        //return view('admin.product.createProduct',['categories'=>$categories,'Subcategory'=>$Subcategory,'manufacturers'=>$manufacturers]);
    	return view('admin.product.createProduct',['Subcategory'=>$Subcategory,'manufacturers'=>$manufacturers]);
    }

    public function storeProduct(Request $request){
    	$this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productquantity' => 'required',
            'productImage' => 'required',
        ]);

    	/*Image code*/
    	$productImage=$request->file('productImage');
    	$name=$productImage->getClientOriginalName();
    	$uploadpath="productImage/";
    	$productImage->move($uploadpath,$name);
    	$imageUrl=$uploadpath.$name;
    	/*Image code*/

    	$product=new Product;
    	$product->productName= $request->productName;
        //$product->categoryId= $request->categoryId;
    	$product->subcategoryId= $request->subcategoryId;
    	$product->manufacturersId= $request->manufacturersId;
    	$product->productPrice= $request->productPrice;
    	$product->productquantity= $request->productquantity;
    	$product->productShortDescription= $request->productShortDescription;
    	$product->productLongDescription= $request->productLongDescription;
    	$product->productImage= $imageUrl;
    	$product->productPublication= $request->productPublication;
    	$product->save();
    	return redirect('/product/add')->with('message','Product Info save Successfully');
    }

    public function manageProduct(){
    	$products = DB::table('products')
            // ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('subcategories', 'products.subcategoryId', '=', 'subcategories.id')
            ->join('manufacturers', 'products.manufacturersId', '=', 'manufacturers.id')
            //->select('products.*', 'categories.categoryName','subcategories.subcategoryName', 'manufacturers.manufacturerName')
            ->select('products.*','subcategories.subcategoryName', 'manufacturers.manufacturerName')
            ->paginate(12);

    	return view('admin.product.manageProduct',['products'=>$products]);
    }

    public function viewProduct($id){
    	$products = DB::table('products')
            //->join('categories', 'products.categoryId', '=', 'categories.id')
            ->join('subcategories', 'products.subcategoryId', '=', 'subcategories.id')
            ->join('manufacturers', 'products.manufacturersId', '=', 'manufacturers.id')
            //->select('products.*', 'categories.categoryName', 'manufacturers.manufacturerName')
            ->select('products.*', 'subcategories.subcategoryName', 'manufacturers.manufacturerName')
            ->where('products.id',$id)
            ->first();

    	return view('admin.product.viewProduct',['products'=>$products]);
    }

    public function editProduct($id){
    	$products= Product::where('id',$id)->first();
        //$categories= Category::where('categoryPublication',1)->get();
        $Subcategory= Subcategory::where('subcategoryPublication',1)->get();
    	$manufacturers= Manufacturer::where('manufacturerPublication',1)->get();
    	return view('admin.product.editProduct',['products'=>$products,'Subcategory'=>$Subcategory,'manufacturers'=>$manufacturers]);
    }

    public function updateProduct(Request $request){
    	$product= Product::find( $request->productbyId );

    	$imageUrl=$this->imageExistStastus($request);

    	$product->productName= $request->productName;
    	$product->subcategoryId= $request->subcategoryId;
    	$product->manufacturersId= $request->manufacturersId;
    	$product->productPrice= $request->productPrice;
    	$product->productquantity= $request->productquantity;
    	$product->productShortDescription= $request->productShortDescription;
    	$product->productLongDescription= $request->productLongDescription;
    	$product->productImage= $imageUrl;
    	$product->productPublication= $request->productPublication;
    	$product->save();
    	return redirect('/product/manage')->with('message','Product info Update Successfully');
    }

    private function imageExistStastus($request){
            $productById=Product::where('id',$request->productbyId)->first();
            $productImage=$request->file('productImage');
            if ($productImage) {
                unlink($productById->productImage);
                $name=$productImage->getClientOriginalName();
                $uploadpath="productImage/";
                $productImage->move($uploadpath,$name);
                $imageUrl=$uploadpath.$name;
            }else{
                $imageUrl=$productById->productImage;
            }
            return $imageUrl;
        }

    public function deleteProduct($id){
    	$product= Product::find($id);
    	$product->delete();
    	return redirect('/product/manage')->with('message','Product info Delete successfully');
    }
}
