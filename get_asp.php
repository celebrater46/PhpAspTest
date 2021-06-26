<?php

// Refer: https://qiita.com/fantm21/items/603cbabf2e78cb08133e

$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json,true);

echo $arr->res->blogData->id;
echo $arr['res']['blogData']['id'];