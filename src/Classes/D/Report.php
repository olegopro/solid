<?php


namespace App\D;

class Report implements IReport
{
    private $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function getView(): View
    {
        return $this->view;
    }

    public function setView(View $view): void
    {
        $this->view = $view;
    }

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

    public function renderReport(): string
    {
        return $this->getView()->render($this->getDoctor(), $this->getPatient(), $this->getData());
    }
}
