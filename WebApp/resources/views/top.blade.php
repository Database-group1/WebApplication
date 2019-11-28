<!DOCTYPE html>
<html lang="ja">
<head>
    <title>農業チュートリアル</title>
    <link rel="stylesheet" href="{{ asset('/css/rayout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/colorbox2.css') }}">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('/js/colorbox/jquery.colorbox-min.js') }}"></script>
</head>

<body>
<div class="container">
    <a href="http://google.com"><img src="{{ asset('/img/vegeplus2.png') }}" id="floatbutton"></a>
    <div class="logo">
	<p><a href="#"><img src="{{ asset('/img/logo.png') }}"></a></p>
    </div>
    <div class="header">
	<!-- ロゴ -->
	<!--<div class="logo">--><!--</div>-->
	<!-- ここに写真(スライドショー) -->
	<div class="cp_cssslider">
	    <div class="cp_slidewrapper">
		<div class="cp_slide_item"><img src="{{ asset('/img/header1.jpg') }}"></div>
		<div class="cp_slide_item"><img src="{{ asset('/img/header2.jpg') }}"></div>
		<div class="cp_slide_item"><img src="{{ asset('/img/header3.jpg') }}"></div>
	    </div>
	</div>
    </div>

    <div class="contents">
	<h1>ご案内</h1>
	<h2>当サイトについて</h2>
	<p>当サイトは、「これから農家を始めたい」「家庭菜園をしたいけれど、何から始めたらいいのかわからない……」という方向けに作成されました。<br>
あなたの人生を豊かにするための手助けになれますと幸いです。</p>

	<h2>サイトの使い方</h2>
	<p>以下から好きな野菜をお選びいただくと、その野菜についての詳しい情報を見ることができます。<br>
野菜を育てるための最適な場所や、育て方・害虫対策に至るまで記載されています。<br>
ぜひご活用ください！</p>

	<h2>自分に合った野菜を見つけたい…！</h2>
	<p>「家庭菜園を始めたいけれど、どの野菜からがいいの？」……<br>
そんなあなたは右下の意味深なボタンをクリックしてみてください……。<br>
お気に入りの野菜が見つかるかも？</p>

	<div class="cut">
	<h1>野菜を選択してください</h1></div>
	<div id="link">
	    <ul>
	    	<li><a href="#a-gyou">あ行</a></li>
	    	<li><a href="#ka-gyou">か行</a></li>
	  	<li><a href="#sa-gyou">さ行</a></li>
	    	<li><a href="#ta-gyou">た行</a></li>
	    	<li><a href="#na-gyou">な行</a></li>
	  	<li><a href="#ha-gyou">は行</a></li>
	 	<li><a href="#ma-gyou">ま行</a></li>
	    	<li><a href="#ya-gyou">や行</a></li>
	    	<li><a href="#ra-gyou">ら行</a></li>
	    	<li><a href="#wa-gyou">わ行</a></li>
	    </ul>
	</div>


	<div id="a-gyou"><h2>あ行</h2></div>
	<div class="box">
	    <div><img src="{{ asset('/img/ingen.png') }}"><p>インゲン豆</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	    <div><img src="{{ asset('/img/edamame2.png') }}"><p>枝豆</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	</div>

	<div id="ka-gyou"><h2>か行</h2></div>
	<div class="box">
	    <div><img src="{{ asset('/img/kabocha.png') }}"><p>かぼちゃ</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	    <div><img src="{{ asset('/img/flower.png') }}"><p>カリフラワー</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	    <div><img src="{{ asset('/img/kyabetu.png') }}"><p>キャベツ</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	    <div><img src="{{ asset('/img/kyuuri.png') }}"><p>きゅうり</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	</div>

	<div id="sa-gyou"><h2>さ行</h2></div>
	<div class="box">
	    <div><img src="{{ asset('/img//suika.png') }}"><p>すいか</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	</div>

	<div id="ta-gyou"><h2>た行</h2></div>
	<div class="box">
	    <div><img src="{{ asset('/img/daikon.png') }}"><p>大根</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	    <div><img src="{{ asset('/img/tomato.png') }}"><p>トマト</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	</div>

	<div id="na-gyou"><h2>な行</h2></div>
	<div class="box">
	    <div><img src="{{ asset('/img/nasu.png') }}"><p>なす</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	</div>

	<div id="ha-gyou"><h2>は行</h2></div>
	<div class="box">
	    <div><img src="{{ asset('/img/piman.png') }}"><p>ピーマン</p>
		<div class='env'><a class="iframe" href="{{ url('/out') }}">環境</a></div>
		<div class='adv'><a class="iframe" href="{{ url('/out') }}">栽培</a></div>
		<div class='for'><a class="iframe" href="{{ url('/out') }}">農地</a></div>
	    </div>
	</div>

	<div id="ma-gyou"><h2>ま行</h2></div>
	<div id="ya-gyou"><h2>や行</h2></div>
	<div id="ra-gyou"><h2>ら行</h2></div>
	<div id="wa-gyou"><h2>わ行</h2></div>
    
    </div>

    <!-- ここにベジプラボタン -->
    <!-- <button class="vege_btn">ベジプラス</button> -->

    <hr>

    <div class="contents2">
        <div class="update_title">更新履歴</div>
    	    <div class="update_box">
	    <dl>
	    	<dt>2019-10-22</dt>
		<dd class="new">〇〇〇を更新しました</dd>
	    	<dt>2019-10-14</dt>
		<dd>×××を更新しました</dd>
	    	<dt>2019-10-07</dt>
		<dd>△△△を更新しました</dd>
	    	<dt>2019-10-01</dt>
		<dd>不具合を修正しました</dd>
	    	<dt>2019-09-27<dt>
		<dd>不具合を修正しました</dd>
	    	<dt>2019-09-20</dt>
		<dd>ページの誤字脱字を修正しました</dd>
	    	<dt>2019-09-17</dt>
		<dd>ページ遷移のバグを修正しました</dd>
	    	<dt>2019-09-10</dt>
		<dd>ベジプラを修正しました</dd>
	    	<dt>2019-09-09</dt>
		<dd>ベータ版を公開しました</dd>
	    </dl>
    	    </div>
    </div>

    <hr>
    <div class="footer">
	<p class="copy">Copyright 2019 TMCIT All Rights Reserved.</p>
	<p>当サイト内にある如何なる素材、画像の無断転載は禁止しております。</p>
    </div>

</div>

<script>
    $(document).ready(function () {
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
    });
</script>

</body>
</html>
