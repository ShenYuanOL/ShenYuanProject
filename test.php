<?php
// 读取JSON数据
$json = 'data/test.json';
$data = json_decode(file_get_contents($json), true);

// 将JSON数据解码为PHP对象
$test = $data["entity"]["friendly"];

// 输出属性数量
echo "属性数量: " . count($test) . "<br>";
?>