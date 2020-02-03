@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel panel-heading">
            Create a New User
        </div>
        <div class="panel-body">
            <form action="{{route('user.store')}}" method="POST" >
                {{csrf_field()}}
                <div class="form-group" >
                    <label for="user">user</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="email">email</label>
                    <input type="email" name="email" class="form-control">
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