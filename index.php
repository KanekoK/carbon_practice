<?php
require "vendor/autoload.php";
use Carbon\Carbon;

// 課題1 ===================================================================== //
// 今週の月曜日を取得 ========================================================== //

// 今日の日付のインスタンス
$dt = Carbon::now();
// echo $dt->startOfWeek(), PHP_EOL;


// 課題2 ===================================================================== //
// 5週先の月曜日を取得 ========================================================= //

// addDayで日付の加算ができる
// echo $dt->startOfWeek()->addDay(34), PHP_EOL;


// 課題3 ===================================================================== //
// 今週の月曜日から5週分の日付を表示 ==================================================== //

for ($i = 0; $i <= 34; $i++) {
    echo $dt->startOfWeek()->addDay($i), PHP_EOL;
}
// echo $dt->startOfWeek()->addDay(8), PHP_EOL;
