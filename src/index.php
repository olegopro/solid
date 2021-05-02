<?php

use App\S\HtmlTemplate;
use App\S\PhpTemplate;
use App\S\Report;

require '../vendor/autoload.php';

$report = new Report();
$template = new HtmlTemplate();

$template->render($report->renderReport());

