<?php

require '../vendor/autoload.php';

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
$repository->save*/();
