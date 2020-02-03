@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            published post
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>image</th>
                <th>title</th>
                <th>edit</th>
                <th>trash</th>
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
                            <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-xs btn-info">
                                edit
                            </a>
                        </td>
                        <td>
                            <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-xs btn-danger ">
                                trash
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