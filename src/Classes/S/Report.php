<?php

namespace App\S;

class Report
{
    public function getDoctor()
    {
        return 'Doctor';
    }

    public function getPatient()
    {
        return 'Patient';
    }

    public function getData()
    {
        return 'Data';
    }

    public function renderReport()
    {
        echo $this->getDoctor() . '<br>' . $this->getpatient() . '<br>' . $this->getData();
    }


    public function export()
    {
    }
}
