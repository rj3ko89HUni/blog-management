<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Awjudd\FeedReader\Facade as FeedReader;
use App\Http\Controllers\Controller;
use App\Memo;
use App\Item;

class BlogController extends Controller
{
  public function add()
  {
    return view('admin.blog.create');
  }

  public function create(Request $request)
  {
     $this->validate($request, Memo::$rules);

     $memo = new Memo;
     $form = $request->all();

     unset($form['_token']);

     $memo->fill($form);
     $memo->save();
     return redirect('admin/blog/create');
  }

  public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Memo::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのメモを取得して降順に表示する
            $posts = Memo::all()->sortByDesc('updated_at');
        }
        return view('admin.blog.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request)
    {
        // Memo Modelからデータを取得する
        $memo = Memo::find($request->id);
        if (empty($memo)) {
          abort(404);
        }
        return view('admin.blog.edit', ['memo_form' => $memo]);
    }

    public function update2(Request $request)
  {
      // Validationをかける
      $this->validate($request, Memo::$rules);
      // Memo Modelからデータを取得する
      $memo = Memo::find($request->id);
      // 送信されてきたフォームデータを格納する
      $memo_form = $request->all();
      unset($memo_form['_token']);
      // 該当するデータを上書きして保存する
      $memo->fill($memo_form)->save();
      return redirect('admin/blog');
  }

  public function delete(Request $request)
  {
    // 該当するM Modelを取得
    $memo = Memo::find($request->id);
    // 削除する
    $memo->delete();

    return redirect('admin/blog/');
  }

  public function search(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Search::where('site_title', 'title', 'content', 'thumbnail', 'timestamps', $cond_title)->get();
        } else {
            // それ以外は表示しない
            $posts = null;
        }
        return view('admin.blog.search', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

  public function trend()
  {
    return view('admin.blog.today.trend');
  }

 public function update()
 {
     $feed = FeedReader::read('https://japanese.engadget.com/rss.xml');
     $rss_data = [];
     foreach($feed->get_items() as $item) {
     $data = array(
       'site_title' => $feed->get_title(),
       'title'     => $feed->get_title(),
       'link'     => $feed->get_link(),
       'permalink' => $feed->get_permalink(),
       'items'     => $feed->get_items(),
       'description'  => $feed->get_description(),
       // 'enclosure'=> $feed->get_enclosure(),
       // 'thumbnail'  => $feed->get_thumbnail(),
     );
     $rss_data[] = $data;
   }
  return view('admin.blog.today.update', $data);
  // return view('admin.blog.today.update', ['rss_data' => $rss_data]);
}

  public function feed()
  {
    return view('admin.blog.today.information.feed');
  }
}
