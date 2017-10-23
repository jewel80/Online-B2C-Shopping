<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use DB;

class SubcategoryController extends Controller
{
    public function addSubCategory(){
    	$categories= Category::where('categoryPublication',1)->get();
    	return view('admin.subcategory.createSubcategory',['categories'=>$categories]);
    }

    public function storeSubCategory(Request $request){
        $this->validate($request, [
            'subcategoryName' => 'required',
            'subcategoryDescription' => 'required'
        ]);
    	$subcategory =new Subcategory;
    	$subcategory->categoryId =$request->categoryId;
    	$subcategory->subcategoryName =$request->subcategoryName;
    	$subcategory->subcategoryDescription =$request->subcategoryDescription;
    	$subcategory->subcategoryPublication =$request->subcategoryPublication;
    	$subcategory->save();
    	return redirect('sub-category/add')->with('message','Subcategory Successfully Insert');
    }

    public function manageSubCategory(){
    	$subcategories = DB::table('subcategories')
            ->join('categories', 'subcategories.categoryId', '=', 'categories.id')
            ->select('subcategories.*', 'categories.categoryName')
            ->paginate(10);
    	return view('admin.subcategory.manageSubcategory',['subcategories'=>$subcategories]);
    }

    public function editSubCategory($id){
        $subcategories= Subcategory::where('id',$id)->first();
        $categorics=Category::where('categoryPublication',1)->get();
        return view('admin.subcategory.editSubCategory',['subcategories'=>$subcategories,'categorics'=>$categorics]);
    }

    public function updateSubCategory(Request $request){
        $subcategory= Subcategory::find( $request->categoryId );

        $this->validate($request, [
            'subcategoryName' => 'required',
            'subcategoryDescription' => 'required'
        ]);
        $subcategory->categoryId =$request->categoryId;
        $subcategory->subcategoryName =$request->subcategoryName;
        $subcategory->subcategoryDescription =$request->subcategoryDescription;
        $subcategory->subcategoryPublication =$request->subcategoryPublication;
        $subcategory->save();
        return redirect('sub-category/add')->with('message','Subcategory Successfully Insert');
    }

    public function deleteSubCategory($id){
        $subcategory= Subcategory::find($id);
        $subcategory->delete();
        return redirect('sub-category/add')->with('message','Are you sure Delete Sub-Category');
    }
}
