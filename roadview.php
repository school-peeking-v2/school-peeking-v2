<!DOCTYPE html>
<html>
<head>
    <title>school-peeking-marzipano</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
    <style> @-ms-viewport { width: device-width; } </style>
    <link rel="stylesheet" href="vendor/reset.min.css">
    <link rel="stylesheet" href="css/roadview.css">
</head>
<body class="multiple-scenes ">

<div id="pano"></div>

<div id="sceneList">
    <ul class="scenes">

        <a href="javascript:void(0)" class="scene" data-id="0-">
            <li class="text">정문</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="1--">
            <li class="text">경비실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="2--">
            <li class="text">급식실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="3--">
            <li class="text">강당 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="4-">
            <li class="text">강당입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="5----">
            <li class="text">별관입구, 매점 가는 계단</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="6-">
            <li class="text">본관입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="7--">
            <li class="text">중앙 계단</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="8---">
            <li class="text">중앙 계단 위</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="9---atm-">
            <li class="text">본관 입구 (ATM 쪽)</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="10---1">
            <li class="text">본관 입구 (1층)</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="11--">
            <li class="text">계양대 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="12--">
            <li class="text">다목적실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="13---">
            <li class="text">다목적실 계단 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="14--">
            <li class="text">체육관 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="15----">
            <li class="text">체육관 앞 계단 위</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="16---">
            <li class="text">강당 쪽 운동장</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="17---">
            <li class="text">체육관 쪽 운동장</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="18---">
            <li class="text">쓰레기장 가는 길</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="19---2">
            <li class="text">쓰레기장 가는 길2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="20--">
            <li class="text">쓰레기장 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="21----">
            <li class="text">정원, 쓰레기장 가는 길</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="22---">
            <li class="text">정원 가는 길</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="23---">
            <li class="text">연못 앞 정원</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="24----">
            <li class="text">중앙 계단 앞 정원</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="25--">
            <li class="text">정원 중앙</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="26----">
            <li class="text">정원 중앙 옆 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="27---">
            <li class="text">미림여고 앞 정원</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="28---">
            <li class="text">매점 연결 통로</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="29----">
            <li class="text">매점 연결 통로 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="30----">
            <li class="text">매점 가는 계단 위</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="31----">
            <li class="text">휴게장소, 다목적실 계단 입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="32----">
            <li class="text">본관  입구 내부</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="33--1--">
            <li class="text">본관 1층 연결 계단</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="34---1">
            <li class="text">본관 계단 1층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="35---1-2-">
            <li class="text">본관 계단 1층 2층 사이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="36--atm--1">
            <li class="text">본관 (ATM 쪽) 1층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="37---atm---1-2-">
            <li class="text">본관 계단 (ATM 쪽)  1층 2층 사이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="38---2">
            <li class="text">본관 계단 2층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="39--2">
            <li class="text">본관 2층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="40---">
            <li class="text">교장실 앞 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="41-1--">
            <li class="text">1교무실 앞 모퉁이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="42-1--">
            <li class="text">1교무실 앞 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="43-1---2">
            <li class="text">1교무실 앞 복도 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="44-1">
            <li class="text">1교무실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="45---">
            <li class="text">별관 가는 길</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="46----2">
            <li class="text">별관 가는 길 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="47----3">
            <li class="text">별관 가는 길 3</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="48--">
            <li class="text">행정실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="49--2----">
            <li class="text">기숙사 2층 연결 통로 복도 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="50----2----2">
            <li class="text">미림여고 교장실, 기숙사 2층 연결 통로 복도 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="51---2----3">
            <li class="text">대외협력실, 기숙사 2층 연결 통로 복도 3</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="52-3--">
            <li class="text">3교무실, 남교사 휴게실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="53--">
            <li class="text">수준별교실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="54-">
            <li class="text">수준별교실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="55-2---atm--">
            <li class="text">2교무실, 본관 계단 (ATM쪽)  앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="56--atm--2">
            <li class="text">본관 (ATM쪽) 계단 2층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="57--">
            <li class="text">진로 체험실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="58-">
            <li class="text">과학실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="59----">
            <li class="text">보건실, 과학실, 진로체험실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="60-">
            <li class="text">보건실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="61-2---">
            <li class="text">2층 복도 끝 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="62--3">
            <li class="text">본관 3층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="63-">
            <li class="text">방송실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="64--">
            <li class="text">학교 기업실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="65---">
            <li class="text">학교 기업실 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="66-4">
            <li class="text">4교무실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="67-4-">
            <li class="text">4교무실 뒷문</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="68-2-2-">
            <li class="text">2학년 2반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="69-2-1-">
            <li class="text">2학년 1반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="70--1--2">
            <li class="text">소프트웨어 1실, 솔루션 2실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="71--2">
            <li class="text">뉴미디어웹솔루션 2실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="72--1">
            <li class="text">뉴미디어소프트웨어 1실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="73-----atm--">
            <li class="text">창작지원센터 앞, 본관 계단 (ATM 쪽) 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="74---atm--3-as">
            <li class="text">본관 계단 (ATM 쪽) 3층, A/S실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="75--">
            <li class="text">프린터기 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="76--2--3">
            <li class="text">소프트웨어 2실, 솔루션 3실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="77--2">
            <li class="text">뉴미디어소프트웨어 2실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="78--3">
            <li class="text">뉴미디어웹솔루션 3실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="79--1-----">
            <li class="text">솔루션 1실, 복도 끝 계단 계단 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="80--1">
            <li class="text">뉴미디어웹솔루션 1실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="81---4">
            <li class="text">본관 계단 4층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="82--4">
            <li class="text">본관 4층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="83-2-5-">
            <li class="text">2학년 5반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="84-2-5">
            <li class="text">2학년 5반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="85-2-6-">
            <li class="text">2학년 6반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="86-2-6-">
            <li class="text">2학년 6반 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="87--1-">
            <li class="text">스마트문화앱콘텐츠제작 1실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="88--1">
            <li class="text">스마트문화앱콘텐츠제작 1실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="89--">
            <li class="text">무한상상카페 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="90-">
            <li class="text">무한상상카페</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="91--">
            <li class="text">디지털스튜디오 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="92-">
            <li class="text">디지털스튜디오</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="93--1-">
            <li class="text">뉴미디어디자인 1실 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="94--1">
            <li class="text">뉴미디어디자인 1실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="95-2-4-">
            <li class="text">2학년 4반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="96-2-4">
            <li class="text">2학년 4반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="97-2-3">
            <li class="text">2학년 3반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="98-2-3----atm--">
            <li class="text">2학년 3반 앞, 본관 계단 (ATM 쪽) 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="99-1-1-1-6-">
            <li class="text">1학년 1반, 1학년 6반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="100-1-1">
            <li class="text">1학년 1반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="101-1-2-1-5-">
            <li class="text">1학년 2반, 1학년 5반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="102-1-2">
            <li class="text">1학년 2반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="103-1-6">
            <li class="text">1학년 6반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="104-1-3-">
            <li class="text">1학년 3반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="105-1-3">
            <li class="text">1학년 3반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="106-1-5">
            <li class="text">1학년 5반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="107-1-4-4-----">
            <li class="text">1학년 4반, 4층 휴게장소, 복도 끝 계단 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="108-1-4">
            <li class="text">1학년 4반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="109--">
            <li class="text">강당 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="110----">
            <li class="text">별관 서브 계단 지하</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="111---">
            <li class="text">아트스튜디오, 커리어존 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="112-">
            <li class="text">아트스튜디오</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="113-">
            <li class="text">커리어존</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="114---">
            <li class="text">별관 계단 지하</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="115----1-">
            <li class="text">별관 계단 지하 1층 사이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="116-----1--2">
            <li class="text">별관 서브 계단 지하 1층 사이 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="117-----1-">
            <li class="text">별관 서브 계단 지하 1층 사이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="118---1">
            <li class="text">별관 계단 1층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="119--1-3-6---">
            <li class="text">별관 1층, 3학년 6반, 별관 입구 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="120-3-6">
            <li class="text">3학년 6반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="121-3-5--">
            <li class="text">3학년 5반, 코워킹스페이스 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="122-3-5">
            <li class="text">3학년 5반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="123-">
            <li class="text">코워킹스페이스</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="124-3-4------1-">
            <li class="text">3학년 4반, 별관 강당 입구 앞, 별관 1층 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="125----1">
            <li class="text">별관 서브 계단 1층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="126----1-2-">
            <li class="text">별관 서브 계단 1층 2층 사이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="127----">
            <li class="text">별관 매점 가는 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="128-----2">
            <li class="text">별관 매점 가는 복도 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="129-----3">
            <li class="text">별관 매점 가는 복도 3</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="130--">
            <li class="text">매점 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="131-">
            <li class="text">매점</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="132---2">
            <li class="text">별관 계단 2층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="133---1-2-">
            <li class="text">별관 계단 1층 2층 사이</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="134-3-1-">
            <li class="text">3학년 1반 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="135-3-1">
            <li class="text">3학년 1반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="136-3-2--">
            <li class="text">3학년 2반, 영어카페 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="137--">
            <li class="text">영어 카페</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="138-3-3---2-">
            <li class="text">3학년 3반 앞, 별관 2층 복도</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="139-3-3">
            <li class="text">3학년 3반</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="140-----">
            <li class="text">예절교육실, 별관 서브 계단 앞</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="141-">
            <li class="text">예절교육실</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="142--2">
            <li class="text">예절교육실 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="143--3">
            <li class="text">예절교육실 3</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="144----2">
            <li class="text">별관 서브 계단 2층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="145--">
            <li class="text">급식실 입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="146--">
            <li class="text">급식실 내부</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="147---2">
            <li class="text">급식실 내부 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="148---">
            <li class="text">별관 강당 입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="149----2">
            <li class="text">별관 강당 입구 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="150-">
            <li class="text">강당</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="151--2">
            <li class="text">강당 2</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="152--3">
            <li class="text">강당 3</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="153---">
            <li class="text">강당 무대 위</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="154--">
            <li class="text">다목적실 입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="155--">
            <li class="text">다목적실 </li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="156--">
            <li class="text">체육관 입구</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="157---1">
            <li class="text">체육관 계단 1층</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="158-">
            <li class="text">체육관</li>
        </a>

        <a href="javascript:void(0)" class="scene" data-id="159----">
            <li class="text">기숙사 입구, 역사관 앞</li>
        </a>

    </ul>
</div>

<div id="titleBar">
    <h1 class="sceneName"></h1>
</div>

<!-- href = javascript:void(0)-->
<a href="./index.php" id="indexToggle">
    <img class="icon" src="images/home.png">
</a>

<a href="#" id="autorotateToggle">
    <img class="icon off" src="images/play.png">
    <img class="icon on" src="images/pause.png">
</a>

<a href="javascript:void(0)" id="fullscreenToggle">
    <img class="icon off" src="images/fullscreen.png">
    <img class="icon on" src="images/windowed.png">
</a>

<a href="javascript:void(0)" id="sceneListToggle">
    <img class="icon off" src="images/expand.png">
    <img class="icon on" src="images/collapse.png">
</a>

<a href="javascript:void(0)" id="viewUp" class="viewControlButton viewControlButton-1">
    <img class="icon" src="images/up.png">
</a>
<a href="javascript:void(0)" id="viewDown" class="viewControlButton viewControlButton-2">
    <img class="icon" src="images/down.png">
</a>
<a href="javascript:void(0)" id="viewLeft" class="viewControlButton viewControlButton-3">
    <img class="icon" src="images/left.png">
</a>
<a href="javascript:void(0)" id="viewRight" class="viewControlButton viewControlButton-4">
    <img class="icon" src="images/right.png">
</a>
<a href="javascript:void(0)" id="viewIn" class="viewControlButton viewControlButton-5">
    <img class="icon" src="images/plus.png">
</a>
<a href="javascript:void(0)" id="viewOut" class="viewControlButton viewControlButton-6">
    <img class="icon" src="images/minus.png">
</a>

<script src="vendor/es5-shim.js"></script>
<script src="vendor/eventShim.js"></script>
<script src="vendor/classList.js"></script>
<script src="vendor/requestAnimationFrame.js" ></script>
<script src="vendor/screenfull.min.js" ></script>
<script src="vendor/bowser.min.js" ></script>
<script src="vendor/marzipano.js" ></script>

<script src="js/data.js"></script>
<script src="js/roadview.js"></script>

</body>
</html>
