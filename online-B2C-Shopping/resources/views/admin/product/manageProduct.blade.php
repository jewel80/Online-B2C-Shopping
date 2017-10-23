@extends('admin.master')
@section('content')
<hr>
<div class="row">
             
    <h2 class="text-center"><span class=" text-success">{{ Session::get('message') }}</span></h2>
               
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <!-- <th>Category Name</th> -->
                <th>Sub-Cat Name</th>
                <th>Manufacturer Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Publication Status</th>
                <th>Action</th>
                </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="">
                <td>{{ $product->id }}</td>
                <td>{{ $product->productName }}</td>
                
                <td>{{ $product->subcategoryName }}</td>
                <td>{{ $product->manufacturerName }}</td>
                <td>TK. {{ $product->productPrice }}</td>
                <td>{{ $product->productquantity }}</td>
                <td>{{ $product->productPublication == 1? 'Published':'Unpublished'}}</td>
                <td>
                <a href="{{ url('/product/view/'.$product->id) }}" class="btn btn-info" title="Product View">
                    <span class="glyphicon glyphicon-info-sign"></span>  
                </a>

                <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-success" title="Product Edit">
                     <span class="glyphicon glyphicon-edit"></span>  
                </a>

                <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-danger" onclick="return confirm('Are you Delete comfrime Product');" title="Product Delete">
                    <span class="glyphicon glyphicon-trash"></span>  
                </a>
                </td>
            </tr>
        @endforeach
       </tbody>
    </table>
      {{ $products->links() }}                   
</div>
@endsection