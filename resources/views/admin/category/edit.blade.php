@extends('layouts.admin.master')
@section('title','Category Edit')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Category</h4>
                    <form class="forms-sample" action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" value="{{$category->name}}" class="form-control" id="name" placeholder="User name">
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <textarea name="description"  cols="30" rows="10" class="form-control" id="description" placeholder="Category Description">{{$category->description}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
