@extends('admin.master')
@section('main-content')
@php
    define('PAGE','device')
@endphp

<div class="card">
        <h3>Edit Brand</h3>

    <div class="card-body">

        <form action="{{route('admin.brand.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$brand->id}}" />
            <div class="mb-3">
                <label class="form-label">Brand</label>
                <input type="text" name="subcategory" class="form-control"  value="{{$subcategory->subcategory}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Select subcategory</label>
                <select name="category" id="" class="form-control">
                    @foreach ($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}" @if ($subcategory->id==$brand->subcategory_id)
                        selected
                    @endif>{{$subcategory->name}}</option>

                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
                  <br>
                  <img src="{{asset($brand->image)}}" alt="{{$brand->name}}" width="100">
            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>
@endsection
