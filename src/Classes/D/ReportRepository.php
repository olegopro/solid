<?php


namespace App\D;

use App\D\Report;

class ReportRepository
{
    private $report, $saver;

    public function __construct(IReport $report, Saver $saver)
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    public function save()
    {
        $this->saver->save($this->report->renderReport());
    }


}
