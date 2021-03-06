<?php


require_once '../vendor/autoload.php';


//SINGLE RESPONSIBILITY
/*use App\S\HtmlTemplate;
use App\S\PhpTemplate;
use App\S\Report;

$report = new Report();
$template = new HtmlTemplate();

$template->render($report->renderReport());*/


//OPEN CLOSED
/*use App\O\DataBaseSave;
use App\O\FileSave;
use App\O\Report;
use App\O\ReportRepository;

$report = new Report();
$report->renderReport();

$repository = new ReportRepository($report, new FileSave('file.txt'));
//$repository = new ReportRepository($report, new DataBaseSave('localhost', 'root', '', 'demo'));
$repository->save()*/;


//LISKOV SUBSTITUTION
/*use App\L\Example\CompositeView;
use App\L\Example\PartialView;
use App\L\Rectangle;
use App\L\Square;*/

/*$rectangle = new Square();

$rectangle->setWidth(5);
$rectangle->setHeight(4);

echo $rectangle->area();*/

/*const TEMPLATE = __DIR__;

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

echo $layout->render();*/


//INTERFACE SEGREGATION
/*use App\I\G\Order;
use App\I\G\QuickOrder;
use App\I\G\TestController;

$quickOrder = new QuickOrder();
$order = new Order();
$textController = new TestController($order);*/


//DEPENDENCY INVERSION PRINCIPLE
/*use App\D\DataBaseSave;
use App\D\FileSave;
use App\D\Report;
use App\D\ReportRepository;

$report = new Report(new \App\D\View());
$report->renderReport();

$repository = new ReportRepository($report, new FileSave('fileD.txt'));
//$repository = new ReportRepository($report, new DataBaseSave('localhost', 'root', '', 'demo'));
$repository->save();*/
