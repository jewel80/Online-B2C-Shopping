@extends('admin.master')
@section('content')
<hr>

             
<h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>

    <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
           <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Publication Status</th>
            <th>Action</th>
            </tr>                            
        </thead>
    <tbody>
    	@foreach ($categories as $category)
        <tr class="odd gradeA">
            <td>{{ $category->id}}</td>
            <td>{{ $category->categoryName}}</td>
            <td>{{ $category->categoryDescription}}</td>
            <td>{{ $category->categoryPublication ==1? 'Published':'Unpublished' }}</td>
            <td>
                <a href="{{ url('/category/edit/'.$category->id) }}" class="btn btn-success">
                <span class="glyphicon glyphicon-edit"></span>  
                </a>
                <a href="{{ url('/category/delete/'.$category->id) }}" class="btn btn-danger" >
                <span class="glyphicon glyphicon-trash" onclick="return confirm('are you confirm delete');"></span>  
                </a>
            </td>
        </tr>
     	@endforeach
    </tbody>
</table>
<div>
    
</div> 
@endsection