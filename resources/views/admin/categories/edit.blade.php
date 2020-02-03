@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel panel-heading">
            update category
        </div>
        <div class="panel-body">
            <form action="{{route('category.update',['id'=>$category->id])}}" method="HEAD" >
                {{csrf_field()}}
                <div class="form-group" >
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
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