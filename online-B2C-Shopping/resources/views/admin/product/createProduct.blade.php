@extends('admin.master')
@section('content')
<form action="{{ url('/product/save') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-md-12">
	<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
	<div class="well">

		<div class="form-group">
	        <label for="email" class="col-sm-2">Product Name</label>
	        <div class="col-sm-10">
	        	<input type="name" class="form-control" name="productName">
	        	<span class="text-danger">{{ $errors->has('productName') ? $errors->first('productName'):''}}</span>
	        </div>
	    </div>

	    

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Sub-Category Name</label>
	        <div class="col-sm-10">
	        	<select class="form-control" name="subcategoryId" required="">
	        	  <option>Select Sub-Category Name</option>
	        	  @foreach ($Subcategory as $Subcategories) 
				  <option value="{{$Subcategories->id }}">{{$Subcategories->subcategoryName }}</option>
				  @endforeach
				</select>
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Manufacturer Name</label>
	        <div class="col-sm-10">
	        	<select class="form-control" name="manufacturersId" required="">
	        	  <option>Select Manufacturer Name</option>
	        	  @foreach ($manufacturers as $manufacturer) 
				  <option value="{{$manufacturer->id }}">{{$manufacturer->manufacturerName }}</option>
				  @endforeach
				</select>
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Product Price</label>
	        <div class="col-sm-10">
	        	<input type="number" class="form-control" name="productPrice">
	        	<span class="text-danger">{{ $errors->has('productPrice') ? $errors->first('productPrice'):''}}</span>
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Product Quantity</label>
	        <div class="col-sm-10">
	        	<input type="number" class="form-control" name="productquantity">
	        	<span class="text-danger">{{ $errors->has('productquantity') ? $errors->first('productquantity'):''}}</span>
	        </div>
	    </div>


	    <div class="form-group">
	        <label for="email" class="col-sm-2">Product Short Description</label>
	        <div class="col-sm-10">
	        	<textarea class="form-control" name="productShortDescription" rows="6"></textarea>
	        	<span class="text-danger">{{ $errors->has('productShortDescription') ? $errors->first('productShortDescription'):''}}</span>
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Product Long Description</label>
	        <div class="col-sm-10">
	        	<textarea class="form-control" name="productLongDescription" rows="10"></textarea>
	        	<span class="text-danger">{{ $errors->has('productLongDescription') ? $errors->first('productLongDescription'):''}}</span>
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Product Image</label>
	        <div class="col-sm-10">
	        	<input type="file" name="productImage" accept="image/*">
	        	<span class="text-danger">{{ $errors->has('productImage') ? $errors->first('productImage'):''}}</span>
	        </div>
	    </div>

	    <div class="form-group">
	        <label for="email" class="col-sm-2">Publication Status</label>
	        <div class="col-sm-10">
	        	<select class="form-control" name="productPublication" >
	        	  <option>Select Published Status</option>
				  <option value="1">Published</option>
				  <option value="0">Unpublished</option>
				</select>
	        </div>
	    </div>

	     <div class="form-group">
	     	<label for="email" class="col-sm-2"></label>
	        <div class="col-sm-offset col-sm-10">
	        	<button type="submit" name="btn" class="btn btn-success btn-block">Save Product Info</button>
	        </div>
	     </div>

	</div>
</div>
</form>
@endsection