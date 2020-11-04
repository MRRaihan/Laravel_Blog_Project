@extends('layouts.admin.master')
@section('title','Author Edit')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Author</h4>
                    <form class="forms-sample" action="{{ route('author.update', $author->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" value="{{$author->name}}" class="form-control" id="name" placeholder="Author Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input name="email" type="email" value="{{$author->email}}" class="form-control" id="email" placeholder="Author Email">
                        </div>
                        <div class="form-group">
                            <label for="email">About</label>
                            <textarea name="about"  cols="30" rows="10" class="form-control" id="about" placeholder="Author About">{{$author->about}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
