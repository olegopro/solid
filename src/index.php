<?php


use App\I\G\TestController;

require_once '../vendor/autoload.php';


$quickOrder = new \App\I\G\QuickOrder();
$order = new \App\I\G\Order();
$textController = new TestController($order);
