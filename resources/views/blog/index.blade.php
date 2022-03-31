@extends('layouts.front')

@section('title', 'Blog_Management')

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
          <input type="submit" href="/admin/blog/search" class="form-button" name="send" placeholder="send">
          <!-- <img src="icon_001500_256.png" width="20px"> -->
        </form>
      </div>
      <li class="good">Update Site</li>
    　<div class="contentss">
        @foreach ($items as $item)
            <div class="card-contents">
              <div class="list-area">
                <div class="Buroger-list">

                    <img src="https://i.gyazo.com/9601d16022c62292e48e8e0392cab0ae.png" class="Buroger-image">
                    <!-- <img src="{{$item->get_thumbnail()}}" class="Buroger-image" width="100"> -->

                  <p class="Buroger-name" value="">{{ $item->get_feed()->get_title() }}</p>
                </div>
                <div class="Burogu-list">
                  <h2 class="text-title" value="">{{ $item->get_title() }}</h2>
                  <p class="Site-information" value=""><a href="{{$item->get_link()}}">{{$item->get_description()}}</a></p>
                </div>
              </div>
            </div>
        @endforeach
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

@endsection
