<?PHP

/*

NOVEL DAYSからバックアップを取得する
URL TITLE 事前指定

テキストデータを取得する
htmlタグを消去する

テキストファイルに書き出す

エピソードの自動取得
*/

$url = array(
"第一幕 Ο?α?, ο?α?, ο?α? ――！　フィネガンズ・ウェイク"=>"https://novel.daysneo.com/works/episode/dee5d8ce8c9fb9d3be556637fca85e99.html",//一話
"第二幕 Anathema Sit ――！　　　　失われた楽園"=>"https://novel.daysneo.com/works/episode/17a7e6fa8ec7023540eaaa23d0ba0741.html",        //二話
"第三幕 Eli, Eli, Lema ――！　　　　氷点下"=>"https://novel.daysneo.com/works/episode/cc8220530e658e79ca83c758f1811afb.html",//三話
"第四幕 Vanitas Vanitatum ――！ 　ああ無情"=>"https://novel.daysneo.com/works/episode/cb394a93c310aa488a877f8920fd8327.html"//四話
);

foreach ($url as $key => $value){
	
	$temp = file_get_contents($value);
	$temp = preg_replace('/<("[^"]*"|\'[^\']*\'|[^\'">])*>/', "", $temp);
	preg_match("/エピソード文字数.+([\s\S]+)ワンクリックで応援できます/u",$temp,$m);
	$temp = trim($m[1]);
	echo($key ."\r\n" . $temp."\r\n\r\n");
		
}





