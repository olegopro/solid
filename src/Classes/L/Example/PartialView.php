<?php


namespace App\L\Example;


use Exception;

class PartialView extends AbstractView
{

    public function addView(AbstractView $view)
    {
        throw new Exception('Не умею добавлять новый вид');
    }

    public function addViews(array $views)
    {
        throw new Exception('Не умею добавлять новый вид');
    }

    public function render()
    {
        return $this->_render();
    }
}
