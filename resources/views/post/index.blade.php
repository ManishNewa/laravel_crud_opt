@extends('template.layout')

@section('title')
    Post Homepage
@endsection


@section('form')  
    <div class="col-md-3">
        <h3 class="col-sm-12 text-center">Enter a post</h3>
        <form action = "/create" method = "get">                    
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <div class="form-group">
                <input type="text" class="form-control" id="title" name='title' placeholder="Enter title">                    
            </div>
            <div class="form-group">
                <!-- <label for="description">Description</label> -->
                <textarea class="form-control" name="description" id="" cols="41" rows="4" placeholder="Enter Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>
    
    <div class="col-md-2"></div>  
@endsection
 
@section('table')
<div  class="col-md-5">
    <h3 class="col-sm-12 text-center">Posts from database</h3>
    <table class="table table-bordered table-info">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td><a href="/edit/{{$post->id}}">Edit</a></td>
            <td><a href="/delete/{{$post->id}}" onclick="return confirm('Are you sure you want to delete it?')">Delete</a></td>
        </tr>
        @endforeach
        
    </table>
</div>
@endsection

