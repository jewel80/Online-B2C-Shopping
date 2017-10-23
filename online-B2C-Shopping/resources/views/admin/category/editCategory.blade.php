@extends('admin.master')

@section('content')
<form action="{{ url('/category/update')}}" method="POST" class="form-horizontal" name="editPublicationStatus">
 {{ csrf_field() }}
<div class="col-md-12">
	<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
	<div class="well">
		<div class="form-group">
	        <label for="email" class="col-sm-2">Category Name</label>
	        <div class="col-sm-10">
	        	<input type="name" class="form-control" name="categoryName" value="{{$categories->categoryName}}">
	        	<input type="hidden" class="form-control" name="categoryById" value="{{$categories->id}}">
	        	<span class="text-danger">{{ $errors->has('categoryName') ? $errors->first('categoryName'):''}}</span>
	        </div>
	     </div>

	     <div class="form-group">
	        <label for="email" class="col-sm-2">Category Description</label>
	        <div class="col-sm-10">
	        	<textarea class="form-control" name="categoryDescription" rows="8">{{$categories->categoryDescription}}</textarea>
	        	<span class="text-danger">{{ $errors->has('categoryDescription') ? $errors->first('categoryDescription'):''}}</span>
	        </div>
	     </div>

	     <div class="form-group">
	        <label for="email" class="col-sm-2">Publication Status</label>
	        <div class="col-sm-10">
	        	<select class="form-control" name="categoryPublication" >
	        	  <option>Select Published Status</option>
				  <option value="1">Published</option>
				  <option value="0">Unpublished</option>
				</select>
	        </div>
	     </div>

	     <div class="form-group">
	     	<label for="email" class="col-sm-2"></label>
	        <div class="col-sm-offset col-sm-10">
	        	<button type="submit" name="btn" class="btn btn-success btn-block">Update Category Info</button>
	        </div>
	     </div>

	</div>
</div>
</form>

<script type="text/javascript">
document.forms['editPublicationStatus'].elements['categoryPublication'].value={{$categories->categoryPublication}}
</script>

@endsection