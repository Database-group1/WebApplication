<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.japan-map.min.js')}}"></script>
<?php
	$pref = array();
	foreach($lands as $l) :
		 array_push($pref, $l->pref);
        endforeach;

	$jsonPref = json_encode($pref, JSON_UNESCAPED_UNICODE);
?>
<script>
$(function(){
        var area1 = [{code : 1, name: "北海道", color: "#7f7eda", hoverColor: "#b3b2ee", prefectures: [1]}];
        var area2 = [{code : 2, name: "青森", color: "#759ef4", hoverColor: "#98b9ff", prefectures: [2]}];
        var area3 = [{code : 3, name: "岩手", color: "#759ef4", hoverColor: "#98b9ff", prefectures: [3]}];
        var area4 = [{code : 4, name: "宮城", color: "#759ef4", hoverColor: "#98b9ff", prefectures: [4]}];
        var area5 = [{code : 5, name: "秋田", color: "#759ef4", hoverColor: "#98b9ff", prefectures: [5]}];
        var area6 = [{code : 6, name: "山形", color: "#759ef4", hoverColor: "#98b9ff", prefectures: [6]}];
        var area7 = [{code : 7, name: "福島", color: "#759ef4", hoverColor: "#98b9ff", prefectures: [7]}];
        var area8 = [{code : 8, name: "茨城",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [8]}];
        var area9 = [{code : 9, name: "栃木",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [9]}];
        var area10 = [{code : 10, name: "群馬",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [10]}];
        var area11 = [{code : 11, name: "埼玉",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [11]}];
        var area12 = [{code : 12, name: "千葉",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [12]}];
        var area13 = [{code : 13, name: "東京",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [13]}];
        var area14 = [{code : 14, name: "神奈川",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [14]}];
        var area15 = [{code : 15, name: "新潟",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [15]}];
        var area16 = [{code : 16, name: "富山",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [16]}];
        var area17 = [{code : 17, name: "石川",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [17]}];
        var area18 = [{code : 18, name: "福井",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [18]}];
        var area19 = [{code : 19, name: "山梨",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [19]}];
        var area20 = [{code : 20, name: "長野",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [20]}];
        var area21 = [{code : 21, name: "岐阜",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [21]}];
        var area22 = [{code : 22, name: "静岡",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [22]}];
        var area23 = [{code : 23, name: "愛知",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [23]}];
        var area24 = [{code : 24, name: "三重",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [24]}];
        var area25 = [{code : 25, name: "滋賀",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [25]}];
        var area26 = [{code : 26, name: "京都",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [26]}];
        var area27 = [{code : 27, name: "大阪",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [27]}];
        var area28 = [{code : 28, name: "兵庫",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [28]}];
        var area29 = [{code : 29, name: "奈良",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [29]}];
        var area30 = [{code : 30, name: "和歌山",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [30]}];
        var area31 = [{code : 31, name: "鳥取",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [31]}];
        var area32 = [{code : 32, name: "島根",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [32]}];
        var area33 = [{code : 33, name: "岡山",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [33]}];
        var area34 = [{code : 34, name: "広島",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [34]}];
        var area35 = [{code : 35, name: "山口",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [35]}];
        var area36 = [{code : 36, name: "徳島",   color: "#fb9466", hoverColor: "#ffbb9c", prefectures: [36]}];
        var area37 = [{code : 37, name: "香川",   color: "#fb9466", hoverColor: "#ffbb9c", prefectures: [37]}];
        var area38 = [{code : 38, name: "愛媛",   color: "#fb9466", hoverColor: "#ffbb9c", prefectures: [38]}];
        var area39 = [{code : 39, name: "高知",   color: "#fb9466", hoverColor: "#ffbb9c", prefectures: [39]}];
        var area40 = [{code : 40, name: "福岡",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [40]}];
        var area41 = [{code : 41, name: "佐賀",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [41]}];
        var area42 = [{code : 42, name: "長崎",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [42]}];
        var area43 = [{code : 43, name: "熊本",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [43]}];
        var area44 = [{code : 44, name: "大分",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [44]}];
        var area45 = [{code : 45, name: "宮崎",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [45]}];
        var area46 = [{code : 46, name: "鹿児島",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [46]}];
        var area47 = [{code : 47, name: "沖縄",   color: "#eb98ff", hoverColor: "#f5c9ff", prefectures: [47]}];
        var area48 = [{name: "", color: "white", hoverColor: "white", prefectures: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47]}];
       
        
        var pref = [];
	pref = JSON.parse('<?php echo $jsonPref; ?>');
        var areas = [];
	
	areas = areas.concat(area48);

        for (var i = 0; i < pref.length; i++) {
        	if(pref[i] == '北海道') {
                	areas = areas.concat(area1);
        	} else if (pref[i] == '青森') {
                	areas = areas.concat(area2);
        	} else if (pref[i] == '岩手') {
                	areas = areas.concat(area3);
        	} else if (pref[i] == '宮城') {
                	areas = areas.concat(area4);
        	} else if (pref[i] == '秋田') {
                	areas = areas.concat(area5);
        	} else if (pref[i] == '山形') {
                	areas = areas.concat(area6);
        	} else if (pref[i] == '福島') {
                	areas = areas.concat(area7);
        	} else if (pref[i] == '茨城') {
                	areas = areas.concat(area8);
        	} else if (pref[i] == '栃木') {
                	areas = areas.concat(area9);
        	} else if (pref[i] == '群馬') {
                	areas = areas.concat(area10);
        	} else if (pref[i] == '埼玉') {
                	areas = areas.concat(area11);
        	} else if (pref[i] =='千葉') {
                	areas = areas.concat(area12);		
        	} else if (pref[i] == '東京') {
                	areas = areas.concat(area13);
        	} else if (pref[i] == '神奈川') {
                	areas = areas.concat(area14);
        	} else if (pref[i] == '新潟') {
                	areas = areas.concat(area15);
        	} else if (pref[i] == '富山') {
                	areas = areas.concat(area16);
        	} else if (pref[i] == '石川') {
                	areas = areas.concat(area17);
        	} else if (pref[i] == '福井') {
                	areas = areas.concat(area18);
        	} else if (pref[i] == '山梨') {
                	areas = areas.concat(area19);
        	} else if (pref[i] == '長野') {
                	areas = areas.concat(area20);
        	} else if (pref[i] == '岐阜') {
                	areas = areas.concat(area21);
        	} else if (pref[i] == '静岡') {
                	areas = areas.concat(area22);
        	} else if (pref[i] == '愛知') {
                	areas = areas.concat(area23);
        	} else if (pref[i] == '三重') {
                	areas = areas.concat(area24);
        	} else if (pref[i] == '滋賀') {
                	areas = areas.concat(area25);
        	} else if (pref[i] == '京都') {
                	areas = areas.concat(area26);
        	} else if (pref[i] == '大阪') {
                	areas = areas.concat(area27);
        	} else if (pref[i] == '兵庫') {
                	areas = areas.concat(area28);
        	} else if (pref[i] == '奈良') {
                	areas = areas.concat(area29);
        	} else if (pref[i] == '和歌山') {
                	areas = areas.concat(area30);
        	} else if (pref[i] == '鳥取') {
                	areas = areas.concat(area31);
        	} else if (pref[i] == '島根') {
                	areas = areas.concat(area32);
        	} else if (pref[i] == '岡山') {
                	areas = areas.concat(area33);
        	} else if (pref[i] =='広島') {
                	areas = areas.concat(area34);
        	} else if (pref[i] == '山口') {
                	areas = areas.concat(area35);
        	} else if (pref[i] == '徳島') {
                	areas = areas.concat(area36);
        	} else if (pref[i] == '香川') {
                	areas = areas.concat(area37);
        	} else if (pref[i] == '愛媛') {
                	areas = areas.concat(area38);
        	} else if (pref[i] == '高知') {
                	areas = areas.concat(area39);
        	} else if (pref[i] == '福岡') {
                	areas = areas.concat(area40);
        	} else if (pref[i] == '佐賀') {
                	areas = areas.concat(area41);
        	} else if (pref[i] == '長崎') {
                	areas = areas.concat(area42);
        	} else if (pref[i] == '熊本') {
                	areas = areas.concat(area43);
        	} else if (pref[i] == '大分') {
                	areas = areas.concat(area44);
        	} else if (pref[i] =='宮崎') {
                	areas = areas.concat(area45);
        	}else if(pref[i] == '鹿児島') {
                	areas = areas.concat(area46);
        	}else if (pref[i] == '沖縄') {
                	areas = areas.concat(area47);
        	}
	}


	
      


        $("#map-container").japanMap({
        width: 730,
        selection: "area",
        areas: areas, 
        backgroundColor : "#f2fcff",
        borderLineColor: "black",
        borderLineWidth : 0.25,
        lineColor : "#a0a0a0",
        lineWidth: 1,
        drawsBoxLine: true,
        showsPrefectureName: true,
        prefectureNameType: "short",
        movesIslands : true,
        fontSize : 11,
        fontShadowColor : "#fff",
        
    });
});      
</script>



</head>

<body>


<div id="map-container"></div>


</body>
</html>
