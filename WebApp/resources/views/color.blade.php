<!DOCTYPE html>
<html>
<head>
    <title>Colorbox TEST</title>
    <link rel="stylesheet" href="{{ asset('/css/colorbox2.css') }}">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('/js/colorbox/jquery.colorbox-min.js') }}"></script>
</head>

<body>

<a class="iframe" href="{{ url('/out') }}">テストページ</a>

<script>
    $(document).ready(function(){
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
    });
</script>

</body>
</html>
