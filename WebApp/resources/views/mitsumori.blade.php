<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>農業チュートリアル</title>
<link rel="stylesheet" href="{{ asset('css/mitsumori.css') }}">
</head>

<body>
<?php

$dsn = 'mysql:dbname=WebApp;host=localhost;charset=utf8';
$user = 'root';
$password = '';


try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}

$sql1 = /*'select prefCode, prefName, cityCode, cityName, oldCityCode, oldCityName, dispType, agriculturalLandType, matter,*/'select label, value_2005, value_2010, value_2015 from forstackeds';
$stmt1 = $dbh->query( $sql1 );
$sql2 = /*'select prefCode, prefName, cityCode, cityName, oldCityCode, oldCityName, dispType, agriculturalLandType, matter,*/'select label, value_2005, value_2010, value_2015 from forabandonments';
$stmt2 = $dbh->query( $sql2 );

echo "<table>\n";
/*echo "\t<tr><th>prefCode</th><th>prefName</th><th>cityCode</th><th>cityName</th><th>oldCityCode</th><th>oldCityName</th><th>dispType</th><th>agriculturalLandType</th><th>matter</th><th>label</th><th>value_2005</th><th>value_2010</th><th>value_2015</th></tr>\n";
echo "\t<tr><th>都道府県平均</th><th>value_2005</th><th>value_2010</th><th>value_2015</th></tr>\n";*/
echo "\t<tr><th>経営耕地面積</th><th>2005年</th><th>2010年</th><th>2015年</th><th></th><th>耕作放棄地率</th><th>2005年</th><th>2010年</th><th>2015年</th></tr>\n";

/*$result = $stmt1->fetch( PDO::FETCH_ASSOC )*/

while( $result = $stmt1->fetch( PDO::FETCH_ASSOC ) ){$result2 = $stmt2->fetch( PDO::FETCH_ASSOC );
    echo "\t<tr>\n";
    /*echo "\t\t<td>{$result['prefCode']}</td>\n";
    echo "\t\t<td>{$result['prefName']}</td>\n";
    echo "\t\t<td>{$result['cityCode']}</td>\n";
    echo "\t\t<td>{$result['cityName']}</td>\n";
    echo "\t\t<td>{$result['oldCityCode']}</td>\n";
    echo "\t\t<td>{$result['oldCityName']}</td>\n";
    echo "\t\t<td>{$result['dispType']}</td>\n";
    echo "\t\t<td>{$result['agriculturalLandType']}</td>\n";
    echo "\t\t<td>{$result['matter']}</td>\n";*/
    echo "\t<td>{$result['label']}</td>\n";
    echo "\t<td>{$result['value_2005']}</td>\n";
    echo "\t<td>{$result['value_2010']}</td>\n";
    echo "\t<td>{$result['value_2015']}</td>\n";
    echo "\t\t<th></th>\n";
    echo "\t<td>{$result2['label']}</td>\n";
    echo "\t<td>{$result2['value_2005']}</td>\n";
    echo "\t<td>{$result2['value_2010']}</td>\n";
    echo "\t<td>{$result2['value_2015']}</td>\n";
    echo "\t</tr>\n";
}
echo "</table>\n";

?>

<!--nav>
<ul class="menu">
<li class=”current”><a href="{{url('/')}}">Top</a></li>
<li><a href=”#”>環境</a></li>
<li><a href=”#”>見積</a></li>
</ul>
</nav>
</body>
</html>
