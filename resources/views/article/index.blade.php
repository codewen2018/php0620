@extends("layouts.main")
@section("title","文章列表");
@section("content")
    <a href="{{route("article.add")}}" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>作者</th>
            <th>操作</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->name}}</td>
                <td>{{$article->user->name}}</td>
                <td>
                    <a href="{{route("article.edit",$article->id)}}" class="btn btn-success">编辑</a>
                    <a href="{{route("article.del",$article->id)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>


@endsection

