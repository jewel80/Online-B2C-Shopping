@extends('admin.master')
@section('content')
<hr>
<div class="row">
    <table class="table table-bordered table-hover ">
        <tr>
            <th>Product Id</th>
            <th>{{ $products->id}}</th>
        </tr>
        <tr>
            <th>Product Name</th>
            <th>{{ $products->productName}}</th>
        </tr>
        <tr>
            <th>Sub-Category Name</th>
            <th>{{ $products->subcategoryName}}</th>
        </tr>
        <tr>
            <th>Manufacturer Name</th>
            <th>{{ $products->manufacturerName}}</th>
        </tr>
        <tr>
            <th>Product Price</th>
            <th>{{ $products->productPrice}}</th>
        </tr>
        <tr>
            <th>Product Quantity</th>
            <th>{{ $products->productquantity}}</th>
        </tr>
        <tr>
            <th>Product Short Description</th>
            <th>{!! $products->productShortDescription!!}</th>
        </tr>
        <tr>
            <th>Product Long Description</th>
            <th>{!! $products->productLongDescription !!}</th>
        </tr>
        <tr>
            <th>Product Image</th>
            <th><img src="{{ asset($products->productImage) }}"
             alt="{{$products->productName}}" height="200" width="200"> </th>
        </tr>
        <tr>
            <th>Publication Status</th>
            <th>{{ $products->productPublication == 1? 'Published':'Unpublished'}}</th>
        </tr>

    </table>
</div>
            
@endsection