@extends("layouts.main")
@section("title","文章添加")
@section("content")


    <form class="form-horizontal" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="用户名" name="title" value="{{old("title")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">作者</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="author" name="author" value="{{old("author")}}">
            </div>
        </div>


        <div class="form-group">
            <label  class="col-sm-2 control-label">内容</label>
            <div class="col-sm-10">
               <textarea class="form-control" rows="10" name="content">
                   {{old("content")}}
               </textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>

@endsection
