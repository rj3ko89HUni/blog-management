@extends('layouts.admin')

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
                <li><a href="../Today/trend.html">Trend</a></li>
                <li><a href="../Today/update_site.html">Update</a></li>

                <li class="theme">[Keep]</li>
                <li><a href="../keep/memo.blade.php">Memo</a></li>
              </ul>
            </nav>
          </div>
       </div>

       <div class="aside">
         <label for="menu" class="close">×</label>
         <nav>
           <ul class="Side-bar">
             <li class="theme">[Today]</li>
             <li><a href="../Today/trend.html">Trend</a></li>
             <li><a href="../Today/update_site.html">Update</a></li>

             <li class="theme">[Bloger]</li>
             <ul class="ac">
               <li>
                 <div class="ac-label">
                   <p>Folder</p>
                   <div class="icon-wrap"><span class="icon"></span></div>
                 </div>
                 <div class="ac-content">
                   <p><a href="../Bloger/folder.html">マナブ</a></p>
                   <p><a href="../Bloger/folder.html">マナブ</a></p>
                 </div>
               </li>
             </ul>
             <ul class="ac">
               <li>
                 <div class="ac-label">
                   <p>Folder</p>
                   <div class="icon-wrap"><span class="icon"></span></div>
                 </div>
                 <div class="ac-content">
                   <p><a href="../Bloger/folder.html">マナブ</a></p>
                   <p><a href="../Bloger/folder.html">マナブ</a></p>
                 </div>
               </li>
             </ul>

             <li class="theme">[Keep]</li>
             <li><a href="../Keep/read_later.html">Read Later</a></li>
             <li><a href="../Keep/history_site.html">History</a></li>
             <li><a href="../keep/memo.blade.php">Memo</a></li>
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
             <form action="{{ action('Admin\BlogController@memo') }}" method="post" enctype="multipart/form-data">

                 @if (count($errors) > 0)
                     <ul>
                         @foreach($errors->all() as $e)
                             <li>{{ $e }}</li>
                         @endforeach
                     </ul>
                 @endif
                 <div class="form-group row">
                     <label class="col-md-2" for="title">date</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="title" value="{{ old('title') }}">
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
                 {{ csrf_field() }}
                 <input type="submit" class="btn-primary" value="更新">
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
   <?php
   $feed = FeedReader::read('https://rss.itmedia.co.jp/rss/2.0/itmedia_all.xml');

   if ( $feed->error() ) {
       echo $feed->error();
   }

   foreach ($feed->get_items() as $item) {
       $hash = [];
       $hash['site_title'] = $item->get_feed()->get_title();
       $hash['title'] = trim($item->get_title());
       $hash['permalink'] = trim($item->get_permalink());
       $hash['link'] = trim($item->get_link());
       $hash['date'] = $item->get_date('Y-m-d H:i:s');
       $hash['content'] = $item->get_content();
       dump($hash);
   }
   ?>
@endsection
