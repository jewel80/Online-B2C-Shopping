<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class manufacturerController extends Controller
{
    public function addManufacturer(){
    	return view('admin.manufacturer.createManufacturer');
    }

    public function storeManufacturer(Request $request){
    	$this->validate($request,[
	        'manufacturerName' => 'required',
	        'manufacturerDescription' => 'required',
   	    ]);

    	$manufacturer= new Manufacturer;
    	$manufacturer->manufacturerName=$request->manufacturerName;
    	$manufacturer->manufacturerDescription=$request->manufacturerDescription;
    	$manufacturer->manufacturerPublication=$request->manufacturerPublication;
    	$manufacturer->save();
    	return redirect('/manufacturer/add')->with('message','manufacturer product save Successfully insert');
	 }

	 public function manageManufacturer(){
	 	$manufacturers= Manufacturer::all();
	 	return view('admin.manufacturer.manageManufacturer',['manufacturers'=>$manufacturers]);
	 }

	 public function editManufacturer($id){
	 	$manufacturers= Manufacturer::where('id',$id)->first();
	 	return view('admin.manufacturer.editManufacturer',['manufacturers'=>$manufacturers]);

	 }

	 public function updateManufacturer(Request $request){
	 	$manufacturer= Manufacturer::find($request->id);

    	$manufacturer->manufacturerName=$request->manufacturerName;
    	$manufacturer->manufacturerDescription=$request->manufacturerDescription;
    	$manufacturer->manufacturerPublication=$request->manufacturerPublication;
    	$manufacturer->save();
    	return redirect('/manufacturer/manage')->with('message','manufacturer product save Successfully insert');
	 }

	 public function deleteManufacturer($id){
	 	$manufacturer= Manufacturer::find($id);
	 	$manufacturer->delete();
	 	return redirect('/manufacturer/manage')->with('message','manufacturer product save Successfully insert');
	 }

	 
}
