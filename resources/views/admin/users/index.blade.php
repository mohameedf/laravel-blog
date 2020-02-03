@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>image</th>
                <th>name</th>
                <th>permissions</th>
                <th>delete</th>
                </thead>
                <tbody>
                @if($users->count()>0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <img class="img-rounded " src="{{asset($user->profile->avatar)}}" width="90px" height="50px">
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                @if($user->admin)
                                <a href="{{route('user.not.admin',['id'=>$user->id])}}" class="btn btn-xs btn-danger ">
                                    remove admin
                                </a>
                                    @else
                                    <a href="{{route('user.admin',['id'=>$user->id])}}" class="btn btn-xs btn-success ">
                                       make admin
                                    </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('post.delete',['id'=>$user->id])}}" class="btn btn-xs btn-danger ">
                                    delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center"> no publish post</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </div>




@stop