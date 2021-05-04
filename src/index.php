<?php


require_once '../vendor/autoload.php';

use App\I\G\Order;
use App\I\G\QuickOrder;
use App\I\G\TestController;

$quickOrder = new QuickOrder();
$order = new Order();
$textController = new TestController($order);
