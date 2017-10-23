@extends('admin.master')
@section('content')
<hr>

             
<h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>
	<table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
           <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Action</th>
            </tr>                            
        </thead>
    <tbody>
    	<?php $i=1; ?>
    	@foreach ($users as $user)
        <tr class="odd gradeA">
        	<td>{{ $i++}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->address}}</td>
            <td>{{ $user->email}}</td>
            <td>
                <a href='' class="btn btn-success">
                <span class="glyphicon glyphicon-edit"></span>  
                </a>
                <a href="" class="btn btn-danger" >
                <span class="glyphicon glyphicon-trash" onclick="return confirm('are you confirm delete');"></span>  
                </a>
            </td>
        </tr>
     	@endforeach
    </tbody>
</table>
{{ $users->links() }}
<div>
    
</div> 
@endsection