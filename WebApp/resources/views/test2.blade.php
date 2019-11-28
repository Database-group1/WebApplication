<!-- test.blade.php -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <title>Javascript TEST</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
 
    <body>
        <div id="app" class="p-3">
            <p>sample.js sample_jq.jsのテスト</p>
            <button onclick="sample()">sample</button>
	    <button id="btn">sample_jq</button>
        </div>
 
        <!-- vanilla.js はここで読み込む-->
        <script src="{{ asset('js/sample.js') }}"></script>
    </body>
</html>

