@extends('layouts.admin.master')
@section('title','Update post')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Post Table</h4>
                    <form class="forms-sample" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control" id="category">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option @if($category->id == $post->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="author">Author</label>
                            <select name="author_id" class="form-control" id="author">
                                <option value="">Select Author</option>
                                @foreach($authors as $author)
                                    <option @if($author->id == $post->author_id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                            @error('author_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" value="{{isset($post->title)?$post->title:null}}" type="text" class="form-control" id="title" placeholder="Post Title">
                            @error('title')
                               <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="6">{{isset($post->content)?$post->content:null}}</textarea>
                            @error('content')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="#">Status</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input @if($post->status == 'published') checked @endif value="published" type="radio" class="form-check-input" name="status" id="published">
                                    Published
                                </label>
                            </div>
                            <div class="form-check">

                                <label class="form-check-label">
                                    <input @if($post->status == 'unpublished') checked @endif value="unpublished" type="radio" class="form-check-input" name="status" id="unpublished">
                                    Unpublished
                                </label>
                            </div>
                            @error('status')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input name="image" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                   <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                               </span>
                            </div>
                            <br>
                            @if($post->image != null)
                                <img src="{{asset($post->image)}}" alt="" width="20%">
                            @endif
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
