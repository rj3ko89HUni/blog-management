@extends('layouts.admin')

@section('title', 'Blog_Management')

@section('content')
<?php
//applicationに分類されるjavascriptファイル
header("Content-type: application/x-javascript");
//RSSフィードのURL
$rss_url = "https://rss.itmedia.co.jp/rss/2.0/itmedia_all.xml";
// 一覧に表示する記事タイトル件数
$num_data = 5;
//出力データ
$out_data = "";

//simplexml_load_fileを読み込む
$rss = simplexml_load_file($rss_url);
//配列の設定
$array_rss = array();

//子ノードを検索したものを表示する　タイトルとURLと日付の配列　　
foreach ($rss->item as $item) {
	$dc = $item->children('http://purl.org/dc/elements/1.1/');
	$array_rss[] = array('title'=>$item -> title, 'url' => $item -> link, 'date'=> date('Y.m.d', strtotime($dc->date)));
}

//変数num_data（記事タイトル件数）が変数array_rssでカウントした数よりも少ない場合、変数array_rssの要素の数を表示する
if( count($array_rss) < $num_data ){
	$num_data = count($array_rss);
}

//出力データを表示する
for ($i=0; $i<$num_data; $i++){
	$title = $array_rss[$i]['title'];
	$date =  $array_rss[$i]['date'];
	$url = $array_rss[$i]['url'];

	$tag_date = "<dt>".$date."</dt>";
	$tag_title = "<dd><a href=\"".$url."\" target=_blank>".$title."</a></dd>";
	$out_data.= $tag_date.$tag_title;
}
echo "document.write('<dl>');";
echo "document.write('$out_data');";
echo "document.write('</dl>');";
?>
