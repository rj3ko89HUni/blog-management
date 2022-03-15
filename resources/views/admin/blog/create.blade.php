@extends('layouts.admin')

@section('title', 'Blog_Management')

@section('content')
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Blog Management Site</h2>
            </div>
        </div>
    </div> -->
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
