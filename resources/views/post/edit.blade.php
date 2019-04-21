@extends('template.layout')

@section('title')
    Post Homepage
@endsection


@section('form_title')
    Update Post
@endsection

@section('form')
    <div>
        <h3 class="col-sm-12 text-center">Update post</h3>
        <form action = "/update/{{$post->id}}" method = "get">  
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="form-group">
                <input type="text" class="form-control" id="title" name='title' placeholder="Enter title" value="{{$post->title}}">                    
            </div>
            <div class="form-group">
                <!-- <label for="description">Description</label> -->
                <textarea class="form-control" name="description" id="" cols="41" rows="4" placeholder="Enter Description">{{$post->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection


