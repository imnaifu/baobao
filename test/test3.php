<?php
$str = '主要有以下几个文件：index.php, style.css, common.js';
//将目标字符串$str中的文件名替换后增加em标签

$p = '/([a-z0-9]*\.[a-z0-9]*)/';
$r = '<em>$1</em>';
preg_match_all($p, $str, $matches);
$str = preg_replace($p, $r, $str);
echo $str;