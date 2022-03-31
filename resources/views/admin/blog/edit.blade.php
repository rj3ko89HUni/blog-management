@extends('layouts.admin')

@section('title', 'ニュースの編集')

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

    <div class="main">
      <div class="contents-3">
        <form class="form-box" action="#" method="get">
          <input type="search" class="form-input" name="search" placeholder=" search">
          <input type="submit" class="form-button" name="send" placeholder="send">
          <!-- <img src="icon_001500_256.png" width="20px"> -->
        </form>
      </div>
      <div class="memo_container">
       <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="memo_title">Memo</h2>
          <form action="{{ action('Admin\BlogController@update2') }}" method="post" enctype="multipart/form-data">

              @if (count($errors) > 0)
                  <ul>
                      @foreach($errors->all() as $e)
                          <li>{{ $e }}</li>
                      @endforeach
                  </ul>
              @endif
              <div class="form-group row">
                  <label class="col-md-2" for="date">date</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="date" value="{{ old('date') }}">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2" for="title">title</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-md-2" for="body">body</label>
                  <div class="col-md-10">
                      <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-md-10">
                      <input type="hidden" name="id" value="{{ $memo_form->id }}">
                      {{ csrf_field() }}
                      <input type="submit" class="btn btn-primary" value="更新">
                  </div>
              </div>
          </form>
        </div>
       </div>
      </div>
     </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  $(function() {
    $('#nav-content li a').on('click', function(event) {
      $('#nav-input').prop('checked', false);
    });
  });
</script>
<script>
  $(function() {
    $('.ac-label').click(function () {
      $(this).next('div').slideToggle();
      $(this).find(".icon").toggleClass('open');
    });
  });
</script>
@endsection
