<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use Awjudd\FeedReader\Facade as FeedReader;

class BlogController extends Controller
{
  public function index()
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
   return view('blog.index', $data);
   // return view('admin.blog.today.update', ['rss_data' => $rss_data]);
 }
}
