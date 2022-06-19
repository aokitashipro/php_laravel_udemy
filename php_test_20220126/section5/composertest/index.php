<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController;

$app = new TestController;
$app->run();

use Carbon\Carbon;

echo Carbon::now()->format(‘今日はY年m月d日だよ！’);