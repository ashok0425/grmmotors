@extends('vendorpanel.master')
@section('content')
@php
    define('PAGE','customization')
@endphp

<div class="container">
    <div class="card py-3 px-4">
        <div class="d-flex justify-content-between">
            <h3>Product customization Query List</h3>
            <a href="{{route('vendor.product.create')}}" class="btn btn-info btn-lg" >Add Product</a>
        </div>
        <br>

        <table id="myTable" class="table table-responsive-sm" >
            <thead>
                <tr>
                    <th>#</th>

                    <th>Customer name</th>
                    <th>Customer Email</th>
                    <th>Product name</th>
                    <th>customization message</th>
                    <th>Sample Image</th>

                    <th>Status</th>
                    <th>Action</th>

            
                </tr>
            </thead>
            <tbody>
                
                @foreach ($product as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->uname}}</td>
                        <td>{{$item->uemail}}</td>
                        <td>{{$item->pname}}
                            <a href="{{route('vendor.product.edit',['id'=>$item->pid])}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                        </td>
                        <td>{{$item->descr}}</td>
                        <td><a href="{{asset($item->image)}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{asset($item->image)}}" width="60"></a></td>


                     
                        <td>@if ($item->status==1)
                            <a  class="btn btn-success">Replied</a>
                            @else
                            <a class="btn btn-danger">Pending</a>

                        @endif</td>
                        <td>
                            
                            @if ($item->status==1)
                            <a href="{{route('vendor.productcustomize.deactive',['id'=>$item->id,'table'=>'productcustomizes'])}}" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                            @else
                            <a href="{{route('vendor.productcustomize.active',['id'=>$item->id,'table'=>'productcustomizes'])}}" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a> 
                            @endif
                            

                        </td>
                    </tr>
                @endforeach
            </tbody>
              </table>
    </div>
</div>



@endsection