@extends('admin.master')
@section('content')
<hr>

             
<h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>
	<table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
           <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>E-mail</th>
            <th>Phon</th>
            <th>Massage</th>
            <th>Action</th>
            </tr>                            
        </thead>
    <tbody>
    	<?php $i=1; ?>
    	@foreach ($massages as $massage)
        <tr class="odd gradeA">
        	<td>{{ $i++}}</td>
            <td>{{ $massage->name}}</td>
            <td>{{ $massage->email}}</td>
            <td>{{ $massage->telephon}}</td>
            <td>{{ $massage->text}}</td>
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
{{ $massages->links() }}
<div>
    
</div> 
@endsection