<?php


require_once '../vendor/autoload.php';

use App\L\Example\CompositeView;
use App\L\Example\PartialView;
use App\L\Rectangle;
use App\L\Square;

/*$rectangle = new Square();

$rectangle->setWidth(5);
$rectangle->setHeight(4);

echo $rectangle->area();*/

const TEMPLATE = __DIR__;

$layout = new CompositeView();

$header = new PartialView('header.php');
$header->content = 'Header content';

$body = new PartialView('body.php');
$body->content = 'Body content';

$footer = new PartialView('footer.php');
$footer->content = 'Footer content';

$layout->addViews(
    [
        $header,
        $body,
        $footer
    ]
);

echo $layout->render();
