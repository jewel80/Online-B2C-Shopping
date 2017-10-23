@extends('admin.master')

@section('content')

<form action="{{ url('/sub-category/update')}}" method="POST" class="form-horizontal" name="editSubcategory">
 {{ csrf_field() }}
<div class="col-md-12">
	<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
	<div class="well">

		<div class="form-group">
	        <label for="email" class="col-sm-2">Category Name</label>
	        <div class="col-sm-10">
	        	<select class="form-control" name="categoryId" required="">
	        	  <option>Select Category Name</option>
	        	  @foreach ($categorics as $category) 
				  <option value="{{$category->id }}">{{$category->categoryName }}</option>
				  @endforeach
				</select>
	        </div>
	    </div>

		<div class="form-group">
	        <label for="email" class="col-sm-2">Sub-Category Name</label>
	        <div class="col-sm-10">
	        	<input type="name" class="form-control" name="subcategoryName" value="{{$subcategories->subcategoryName}}">
	        	<span class="text-danger">{{ $errors->has('subcategoryName') ? $errors->first('subcategoryName'):''}}</span>
	        </div>
	     </div>

	     <div class="form-group">
	        <label for="email" class="col-sm-2">Sub-Category Description</label>
	        <div class="col-sm-10">
	        	<textarea class="form-control" name="subcategoryDescription" rows="8">{{$subcategories->subcategoryDescription}}</textarea>
	        	<span class="text-danger">{{ $errors->has('subcategoryDescription') ? $errors->first('subcategoryDescription'):''}}</span>
	        </div>
	     </div>

	     <div class="form-group">
	        <label for="email" class="col-sm-2">Publication Status</label>
	        <div class="col-sm-10">
	        	<select class="form-control" name="subcategoryPublication" >
	        	  <option>Select Published Status</option>
				  <option value="1">Published</option>
				  <option value="0">Unpublished</option>
				</select>
	        </div>
	     </div>

	     <div class="form-group">
	     	<label for="email" class="col-sm-2"></label>
	        <div class="col-sm-offset col-sm-10">
	        	<button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
	        </div>
	     </div>

	</div>
</div>
</form>

<script type="text/javascript">
	document.forms['editSubcategory'].elements['categoryId'].value={{ $subcategories->categoryId}}
	document.forms['editSubcategory'].elements['subcategoryPublication'].value={{ $subcategories->subcategoryPublication}}
</script>
@endsection