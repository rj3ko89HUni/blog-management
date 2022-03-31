@extends('layouts.admin')
@section('title', '登録済みニュースの一覧')

@section('content')
<div id="home" class="big-img">
  <header>
    <div class="container">
      <div class="header-title-area">
        <h1 class="logo">Blog Management Site</h1>
      </div>
    </div>
  </header>

  <div class="all">
    <div id="nav-drawer">
       <input id="nav-input" type="checkbox" class="nav-unshown">
       <label id="nav-open" for="nav-input"><span></span></label>
       <label id="nav-close" for="nav-input" class="nav-unshown"></label>
       <div id="nav-content">
         <nav>
           <ul class="Side-bar">
             <li class="theme">[Today]</li>
             <li><a href="/admin/blog/today/trend">Trend</a></li>
             <li><a href="/admin/blog/today/update">Update</a></li>

             <li class="theme">[Keep]</li>
             <li><a href="/admin/blog">History</a></li>
             <li><a href="/admin/blog/create">Memo</a></li>
           </ul>
         </nav>
       </div>
    </div>

    <div class="aside">
      <label for="menu" class="close">×</label>
      <nav>
        <ul class="Side-bar">
          <li class="theme">[Today]</li>
          <li><a href="/admin/blog/today/trend">Trend</a></li>
          <li><a href="/admin/blog/today/update">Update</a></li>

          <li class="theme">[Keep]</li>
          <li><a href="/admin/blog">History</a></li>
          <li><a href="/admin/blog/create">Memo</a></li>
        </ul>
      </nav>
    </div>
    <div class="container">
        <h2 class="memo-list">メモ一覧</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\BlogController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\BlogController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                              　<th width="10%">id</th>
                                <th width="10%">date</th>
                                <th width="20%">title</th>
                                <th width="50%">body</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $memo)
                                <tr>
                                  <th>{{ $memo->id }}</th>
                                  <th>{{ $memo->date }}</th>
                                  <td>{{ str_limit($memo->title, 100) }}</td>
                                  <td>{{ str_limit($memo->body, 250) }}</td>
                                  <td>
                                    <div>
                                        <a href="{{ action('Admin\BlogController@edit',['id' => $memo->id]) }}">編集</a>
                                    </div>
                                    <div>
                                        <a href="{{ action('Admin\BlogController@delete',['id' => $memo->id]) }}">削除</a>
                                    </div>
                                  </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
