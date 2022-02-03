<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    public function addCategory(){
    	return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request){
    	$this->validate($request,[
	        'categoryName' => 'required',
	        'categoryDescription' => 'required',
   	    ]);

	    
    	$categories= new Category;
    	$categories->categoryName=$request->categoryName;
    	$categories->categoryDescription=$request->categoryDescription;
    	$categories->categoryPublication=$request->categoryPublication;
    	$categories->save();
    	return redirect('/category/add')->with('message','Category product save Successfully insert');
	 }

	 public function manageCategory(){
	 	$categories=Category::all();
	 	return view('admin.category.manageCategory',['categories'=>$categories]);
	 }

	 public function editCategory($id){
	 	$categories= Category::where('id',$id)->first();
	 	return view('admin.category.editCategory',['categories'=>$categories]);
	 }

	 public function updateCategory(Request $request){
	 	$categories=Category::find( $request->categoryById );

    	$categories->categoryName=$request->categoryName;
    	$categories->categoryDescription=$request->categoryDescription;
    	$categories->categoryPublication=$request->categoryPublication;
    	$categories->save();
		 
    	return redirect('/category/manage')->with('message','Category product update Successfully insert');
	 }

	 public function deleteCategory($id){
	 	$categories=Category::find($id);
	 	$categories->delete();
	 	return redirect('/category/manage')->with('message','Category product delete Successfully insert');
	 }
}
