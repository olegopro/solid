<?php


namespace App\D;


use App\O\Report;
use App\Saver;

class ReportRepository
{
    private $report, $saver;

    public function __construct(Report $report, Saver $saver)
    {
        $this->report = $report;
        $this->saver  = $saver;
    }

    public function save()
    {
        $this->saver->save($this->report->renderReport());
    }


}
