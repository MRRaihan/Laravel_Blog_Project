@extends('layouts.admin.master')
@section('title','Create Category')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new Category</h4>
                    <form class="forms-sample" action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="User name">
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <textarea name="description"  cols="30" rows="10" class="form-control" id="description" placeholder="Category Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
