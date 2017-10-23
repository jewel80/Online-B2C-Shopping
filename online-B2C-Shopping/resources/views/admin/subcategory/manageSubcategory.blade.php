@extends('admin.master')
@section('content')
<hr>

             
<h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>

    <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
           <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Sub Category Name</th>
            <th>Sub-Category Description</th>
            <th>Publication Status</th>
            <th>Action</th>
            </tr>                            
        </thead>
    <tbody>
    	@foreach ($subcategories as $subcategory)
        <tr class="odd gradeA">
            <td>{!! $subcategory->id !!}</td>
            <td>{!! $subcategory->categoryName !!}</td>
            <td>{!! $subcategory->subcategoryName !!}</td>
            <td>{!! $subcategory->subcategoryDescription !!}</td>
            <td>{{ $subcategory->subcategoryPublication ==1? 'Published':'Unpublished' }}</td>
            <td>
                <a href="{{ url('/sub-category/edit/'.$subcategory->id) }}" class="btn btn-success">
                     <span class="glyphicon glyphicon-edit"></span>  
                </a>
                <a href="{{ url('/sub-category/delete/'.$subcategory->id) }}" class="btn btn-danger" >
                   <span class="glyphicon glyphicon-trash" onclick="return confirm('are you confirm delete');"></span>  
                </a>
            </td>
        </tr>
     	@endforeach
    </tbody>
</table>
{{ $subcategories->links() }}
<div>
    
</div> 
@endsection