@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            trashed post
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>image</th>
                <th>title</th>
                <th>edit</th>
                <th>Restore</th>
                <th>delete</th>
                </thead>
                <tbody>
                @if($posts->count()>0)
                @foreach($posts as $post)
                    <tr>
                        <td>
                            <img class="img-rounded " src="{{$post->featured}}" width="90px" height="50px">
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            <a href="{{route('category.edit',['id'=>$post->id])}}" class="btn btn-xs btn-info">
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-xs btn-success ">
                                Restore
                            </a>
                        </td>
                        <td>
                            <a href="{{route('post.kill',['id'=>$post->id])}}" class="btn btn-xs btn-danger ">
                                delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center"> no trash post</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </div>




@stop