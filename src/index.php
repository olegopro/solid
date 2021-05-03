<?php

use App\O\DataBaseSave;
use App\O\FileSave;
use App\O\Report;
use App\O\ReportRepository;

require '../vendor/autoload.php';

$report = new Report();
$report->renderReport();

$repository = new ReportRepository($report, new FileSave('file.txt'));
$repository = new ReportRepository($report, new DataBaseSave('localhost', 'root', '', 'demo'));
$repository->save();
