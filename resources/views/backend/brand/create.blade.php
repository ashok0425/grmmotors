
@extends('admin.master')
@section('main-content')

@php
    define('PAGE','device')
@endphp


<div class="card">
        <h3>Create New Brand</h3>

    <div class="card-body">

        <form action="{{route('admin.brand.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Brand</label>
                <input type="text" name="subcategory" class="form-control" value="{{old('subcategory')}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Select Subcategory</label>
                <select name="category" id="" class="form-control " required>
                    <option value="">--select Subcategory---</option>
                    @foreach ($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>

                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <div class="file-upload-wrapper" data-text="Select your file!">
                    <input name="file" type="file" class="file-upload-field" value="">
                  </div>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
