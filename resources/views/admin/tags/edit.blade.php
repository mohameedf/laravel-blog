@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel panel-heading">
            update Tag
        </div>
        <div class="panel-body">
            <form action="{{route('tag.update',['id'=>$tag->id])}}" method="POST" >
                {{csrf_field()}}
                <div class="form-group" >
                    <label for="name">Name</label>
                    <input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
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