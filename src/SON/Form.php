<?php

namespace SON;

use SON\Render\FormInfo;

class Form implements FormInfo
{
    protected $method = "POST";
    protected $action = "/";
    protected $fields = [];

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    public function addField(FormInfo $field)
    {
        $this->fields[] = $field;

        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function render()
    {
        echo '<form method="'. $this->method .'" action="'. $this->action .'">';
        foreach ($this->fields as $field) {
            $field->render();
        }
        echo'</form>';
    }
}