<?php
//读取json数据库文件
$json = 'data/test.json';
$data = json_decode(file_get_contents($json), true);

//统计数量
//友好生物页面数量
$fnum = $data["entity"]["friendly"];
//中立生物页面数量
$nnum = $data["entity"]["neutral"];
//敌对生物页面数量
$hnum = $data["entity"]["hostile"];
//物品页面数量
$inum = $data["item"];
//方块页面数量
$bnum = $data["block"];

/*
编码区
*/

//给json文件中的数据进行数据转换
//enity
//友好生物
for ($i = 1; $i <= count($fnum); $i++) {
    $ftitle = $data["entity"]['friendly']["$i"]["enname"];
    $fenname = $data["entity"]['friendly']["$i"]["enname"];
    $fzhname = $data["entity"]['friendly']["$i"]["zhname"];
    $ftext = $data["entity"]['friendly']["$i"]["text"];
    $fimg = $data["entity"]['friendly']["$i"]["imge"];
}
//中立生物
for ($i = 1; $i <= count($nnum); $i++) {
    $ntitle = $data["entity"]['neutral']["$i"]["enname"];
    $nenname = $data["entity"]['neutral']["$i"]["enname"];
    $nzhname = $data["entity"]['neutral']["$i"]["zhname"];
    $ntext = $data["entity"]['neutral']["$i"]["text"];
    $nimg = $data["entity"]['neutral']["$i"]["imge"];
}
//敌对生物
for ($i = 1; $i <= count($hnum); $i++) {
    $htitle = $data["entity"]['hostile']["$i"]["enname"];
    $henname = $data["entity"]['hostile']["$i"]["enname"];
    $hzhname = $data["entity"]['hostile']["$i"]["zhname"];
    $htext = $data["entity"]['hostile']["$i"]["text"];
    $himg = $data["entity"]['hostile']["$i"]["imge"];
}
//block
for ($i = 1; $i <= count($bnum); $i++) {
    $btitle = $data["block"]["$i"]["enname"];
    $benname = $data["block"]["$i"]["enname"];
    $bzhname = $data["block"]["$i"]["zhname"];
    $btext = $data["block"]["$i"]["text"];
    $bimg = $data["block"]["$i"]["imge"];
}
//item
for ($i = 1; $i <= count($inum); $i++) {
    $ititle = $data["item"]["$i"]["enname"];
    $ienname = $data["item"]["$i"]["enname"];
    $izhname = $data["item"]["$i"]["zhname"];
    $itext = $data["item"]["$i"]["text"];
    $iimg = $data["item"]["$i"]["imge"];
}
/*
生成区
*/

//enity
//友好生物
for ($i = 1; $i <= count($fnum); $i++) {
    file_put_contents("pages/entity/friendly/$i.html", "<!DOCTYPE html>
<html>
<head>
<title>$ftitle</title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>
<body>
<img src='$fimg'>
<p>英文名$fenname</p>
<p>中文名$fzhname</p>
<p>$ftext</p>
</body>
</html>");
}
//中立生物
for ($i = 1; $i <= count($nnum); $i++) {
    file_put_contents("pages/entity/neutral/$i.html", "<!DOCTYPE html>
<html>
<head>
<title>$ntitle</title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>
<body>
<img src='$nimg'>
<p>英文名$nenname</p>
<p>中文名$nzhname</p>
<p>$ntext</p>
</body>
</html>");
}
//敌对生物
for ($i = 1; $i <= count($hnum); $i++) {
    file_put_contents("pages/entity/hostile/$i.html", "<!DOCTYPE html>
<html>
<head>
<title>$htitle</title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>
<body>
<img src='$himg'>
<p>英文名$henname</p>
<p>中文名$hzhname</p>
<p>$htext</p>
</body>
</html>");
}
//block
for ($i = 1; $i <= count($bnum); $i++) {
    file_put_contents("pages/block/$i.html", "<!DOCTYPE html>
<html>
<head>
<title>$btitle</title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>
<body>
<img src='$bimg'>
<p>英文名$benname</p>
<p>中文名$bzhname</p>
<p>$btext</p>
</body>
</html>");
}
//item
for ($i = 1; $i <= count($inum); $i++) {
    file_put_contents("pages/item/$i.html", "<!DOCTYPE html>
<html>
<head>
<title>$ititle</title>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>
<body>
<img src='$iimg'>
<p>英文名$ienname</p>
<p>中文名$izhname</p>
<p>$itext</p>
</body>
</html>");
}