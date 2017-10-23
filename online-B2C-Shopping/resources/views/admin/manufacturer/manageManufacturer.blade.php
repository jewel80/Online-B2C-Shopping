@extends('admin.master')
@section('content')
<hr>            
<h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>

    <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
           <tr>
            <th>Id</th>
            <th>Manufacturer Name</th>
            <th>Manufacturer Description</th>
            <th>Manufacturer Status</th>
            <th>Action</th>
            </tr>                            
        </thead>
    <tbody>
    	@foreach ($manufacturers as $manufacturer)
        <tr class="odd gradeA">
            <td>{{ $manufacturer->id}}</td>
            <td>{{ $manufacturer->manufacturerName}}</td>
            <td>{{ $manufacturer->manufacturerDescription}}</td>
            <td>{{ $manufacturer->manufacturerPublication ==1? 'Published':'Unpublished' }}</td>
            <td>
                <a href="{{ url('/manufacturer/edit/'.$manufacturer->id) }}" class="btn btn-success">
                <span class="glyphicon glyphicon-edit"></span>  
                </a>
                <a href="{{ url('/manufacturer/delete/'.$manufacturer->id) }}" class="btn btn-danger" >
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