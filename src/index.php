<?php


require '../vendor/autoload.php';


//DEPENDENCY INVERSION PRINCIPLE

use App\D\DataBaseSave;
use App\D\FileSave;
use App\D\Report;
use App\D\ReportRepository;

$report = new Report(new \App\D\View());
$report->renderReport();

$repository = new ReportRepository($report, new FileSave('fileD.txt'));
//$repository = new ReportRepository($report, new DataBaseSave('localhost', 'root', '', 'demo'));
$repository->save();
