<?php


namespace App\D;

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
        return $this->getDoctor() . '<br>' . $this->getpatient() . '<br>' . $this->getData();
    }
}
