@extends('layouts.admin')

@section('title', 'Blog_Management')

@section('content')
  <body>
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
                 <li><a href="../Keep/memo.html">Memo</a></li>
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
              <li><a href="../Keep/memo.html">Memo</a></li>
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
          <li class="good">History</li>
        　<div class="contentss">
           <div class="contentsss">
             <p class="preservation">2022-3/20 15:00 Sun</p>
          　　<div class="card-contents">
                <div class="list-area">
                  <div class="Buroger-list">
                    <img src="https://i.gyazo.com/9601d16022c62292e48e8e0392cab0ae.png" class="Buroger-image">
                    <p class="Buroger-name">DaiGo</p>
                  </div>
                  <div class="Burogu-list">
                    <h2 class="text-title">オススメ記事1</h2>
                    <p class="Site-information"><a href="../blog.html">会う啞rkzジョイl邪flkjtrぷhgヌイはレアいるg日安jkjfdkj竿イエrsjファlkmjフィオえmvf</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="contentsss">
              <p class="preservation">2022-3/19 16:00 Sat</p>
              <div class="card-contents">
                <div class="list-area">
                  <div class="Buroger-list">
                    <img src="https://i.gyazo.com/bc7b1e819da84c721d5e3100e8e99e30.png" class="Buroger-image">
                    <p class="Buroger-name">マコなり社長</p>
                  </div>
                  <div class="Burogu-list">
                    <h2 class="text-title">オススメ記事2</h2>
                    <p class="Site-information">８英亞rウィンヴィオアウエjkんファイエふいうwゆえ７８３４y８２９１お逢ぁふwくぇいあえjふ</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="contentsss">
              <p class="preservation">2022-3/18 13:00 Fri</p>
              <div class="card-contents">
                <div class="list-area">
                  <div class="Buroger-list">
                    <img src="https://i.gyazo.com/e41bf2257d670361c91778c6d93672e4.jpg" class="Buroger-image">
                    <p class="Buroger-name">中田敦彦</p>
                  </div>
                  <div class="Burogu-list">
                    <h2 class="text-title">オススメ記事3</h2>
                    <p class="Site-information">不ygyjbけういwhるおh７８jんフィナ９エイrhfナィ九平lkwるいくぃあkんふぃぅsんるいえくぉ</p>
                  </div>
                </div>
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
  </body>
@endsection
