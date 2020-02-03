@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel panel-heading">
             Create a New Post
        </div>
        <div class="panel-body">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group" >
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="featured">featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="category">select category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach
                    </select>
                    <div class="form-group">
                        <lable for="tags">Select Tag</lable>

                        @foreach($tags as $tag)
                            <div class="checkbox text-center">

                                <lable><input type="checkbox" name="tags[]" value="{{$tag->id}}" > {{$tag->tag}}</lable>
                            </div>
                            @endforeach
                    </div>

                </div>
                <div class="form-group" >
                    <label for="content">content</label>
                    <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
                </div>
                <div class="form-group" >
                    <div class="text-center" >
                        <button class=" btn btn-success" type="submit">submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @include('includes.errors')


    @stop