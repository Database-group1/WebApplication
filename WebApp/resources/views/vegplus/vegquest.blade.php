<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <title>ベジプラス-質問</title>
        <link rel="stylesheet" href="{{ asset('css/btn_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/back_styles.css') }}">
        <script>
function GetChecked() {
  var frmData = document.getElementById("quest");
  var radioForm = frmData.taste;
  var radioForm2 = frmData.color;
  var a = radioForm.value;
  var b = radioForm2.value;
  y = a + b;

  switch (y) {
    case "sweetred":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/watermelon";
      //alert("『赤くて甘いスイカ』");
      break;

    case "sweetgreen":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/pumpkin";
      //alert("『緑で甘いカボチャ』");
      break;

    case "sweetwhite":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/radish";
      //alert("『白くて甘い大根』");
      break;

    case "bitterred":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/eggplant";
      //alert("『赤くて苦いナス』");
      break;

    case "bittergreen":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/pimento";
      //alert("『緑で苦いピーマン』");
      break;

    case "bitterwhite":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/cauliflower";
      //alert("『白くて苦いカリフラワー』");
      break;

    case "sourred":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/tomato";
      //alert("『赤くて酸っぱいトマト』");
      break;

    case "sourgreen":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/kidney";
      //alert("『緑で酸っぱいインゲン豆』");
      break;

    case "sourwhite":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/mandragora";
      //alert("『白くて酸っぱいマンドラゴラ』");
      break;

    case "nonered":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/soybean";
      //alert("『赤くて無味な枝豆』");
      break;

    case "nonegreen":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/cucumber";
      //alert("『緑で無味なキュウリ』");
      break;

    case "nonewhite":
      location.href = "http://192.168.56.102:8000/vegplus/vegquest/cabbage";
      //alert("『白くて無味なキャベツ』");
      break;

    default:
      alert("『うまくラジオボタンからデータが渡されてないみたい』");
      break;
  }
} 
        </script>
</head>
        <body>
          <center>
                <img class="logo" src="{{ asset('image/begplus.png') }}" alt="logo">

          <form id="quest">

          <div class="text"><h1>質問に回答してみよう！</h1></div>

          <div class = "small_text">

                <h3>Q1.あなたの好きな味はなに？</h3>
           
                 <label><input type="radio" name="taste" value="sweet" checked="checked">甘い！</label>
                 <label><input type="radio" name="taste" value="bitter">苦い！</label>
                 <label><input type="radio" name="taste" value="sour">酸っぱい！</label>
                 <label><input type="radio" name="taste" value="none">味なんてなくていい！</label>

                <h3>Q2.あなたの好きな色は？</h3>

                 <label><input type="radio" name="color" value="red" checked="checked">赤！</label>
                 <label><input type="radio" name="color" value="green">緑！</label>
                 <label><input type="radio" name="color" value="white">白！</label>
          </div>

                 <div class="mgr-10"></div>
                 <input type="button" class="btn-right-radius" onclick="GetChecked()" value="結果は...">

          </form>

          </center>
        </body>
</html>

