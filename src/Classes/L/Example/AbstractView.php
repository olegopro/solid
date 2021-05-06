<?php


namespace App\L\Example;

use Exception;

abstract class AbstractView
{
    public $content;
    protected $_template;

    public function __construct($template = null)
    {
        if ($template !== null) {
            $this->setTemplate($template);
        }
    }

    public function setTemplate($template)
    {
        $template = TEMPLATE . '/templates' . DIRECTORY_SEPARATOR . $template;
        if (!file_exists($template)) {
            throw new Exception('Проблемный темплейт');
        }

        $this->_template = $template;
    }

    public function getTemplate()
    {
        return $this->_template;
    }

    protected function _render()
    {
        if ($this->_template !== null) {
            extract(['content' => $this->content]);
            ob_start();
            var_dump($this->_template);

            include $this->_template;

            return ob_get_clean();
        }

        return '';
    }

    abstract public function addView(AbstractView $view);

    abstract public function addViews(array $views);

    abstract public function render();
}
