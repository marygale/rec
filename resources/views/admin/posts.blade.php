@extends('layout.admin')
@section('title')
    Posts
@stop
@section('breadcrumb')
    <li>
        Posts
    </li>
@stop
@section('content')
    <div class="well">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th><input id="cb-select-4" type="checkbox" name="post[]" value="4"></th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Likes</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $post)
                    <tr>
                        <td class="text-center"><input id="cb-select-4" type="checkbox" name="post[]" value="{{$post['id']}}"></td>
                        <td><a href="javascript:void(0);"> {{$post['title']}}</a></td>
                        <td>{{ $post['author']}}</td>
                        <td>{{$post['likes']}}</td>

                        <td>{{$post['date']}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
    </div>
@stop

