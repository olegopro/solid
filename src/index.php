<?php


require '../vendor/autoload.php';


use App\S\HtmlTemplate;
use App\S\PhpTemplate;
use App\S\Report;

$report = new Report();
$template = new HtmlTemplate();

$template->render($report->renderReport());

