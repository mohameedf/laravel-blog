@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel panel-heading">
            Edit  Post {{$post->title}}
        </div>
        <div class="panel-body">
            <form action="{{route('post.update',['id'=>$post->id])}}" method="HEAD" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group" >
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group" >
                    <label for="featured">featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="category">select category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                            @if($post->category->id==$category->id)
                                selected
                                @endif
                            >{{$category->name}}</option>

                        @endforeach
                    </select>

                    <div class="form-group">
                        <lable for="tags">Select Tag</lable>

                        @foreach($tags as $tag)
                            <div class="checkbox text-center">

                                <lable class="checkbox-inline"><input type="checkbox" name="tags[]" value="{{$tag->id}}"
                                   @foreach($post->tags as $t)
                                            @if($t->id== $tag->id)
                                                 checked
                                             @endif
                                           @endforeach> {{$tag->tag}}</lable>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="form-group" >
                    <label for="content">content</label>
                    <textarea class="form-control" name="content" id="content" cols="5" rows="5" >{{$post->content}}</textarea>
                </div>
                <div class="form-group" >
                    <div class="text-center" >
                        <button class=" btn btn-success" type="submit">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @include('includes.errors')


@stop