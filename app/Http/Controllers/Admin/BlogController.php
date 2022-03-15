<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Awjudd\FeedReader\Facade as FeedReader;
use App\Http\Controllers\Controller;

// $feed = FeedReader::read('https://www.nicovideo.jp/tag/MikuMikuDance?sort=f&rss=2.0');
// $feed = FeedReader::read('https://rss.itmedia.co.jp/rss/2.0/itmedia_all.xml');
//
// if ( $feed->error() ) {
//     echo $feed->error();
// }
//
// foreach ($feed->get_items() as $item) {
//     $hash = [];
//     $hash['site_title'] = $item->get_feed()->get_title();
//     $hash['title'] = trim($item->get_title());
//     $hash['permalink'] = trim($item->get_permalink());
//     $hash['link'] = trim($item->get_link());
//     $hash['date'] = $item->get_date('Y-m-d H:i:s');
//     $hash['content'] = $item->get_content();
//     dump($hash);
// }


class BlogController extends Controller
{
  public function add()
  {
    return view('admin.blog.create');
  }

}
