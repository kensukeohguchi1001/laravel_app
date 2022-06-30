<?php

namespace App\MyClasses;

class MyService implements MyServiceInterface
{
    private $id = -1;
    private $msg = 'no id...';
    private $data = ['hello', 'welcome', 'bye'];

    public function __construct()
    {
        $this->serial = rand();
        echo "『" . $this->serial . "』";
    }

    public function setId($id)
    {
        $this->id = $id;
        if ($id >= 0 && count($this->data)) {
            $this->msg = "select id:" . $id . ', data:"' . $this->data[$id] . '"';
        }
    }

    public function say()
    {
        return $this->msg;
    }

    public function data(int $id)
    {
      return $this->data;
    }

    public function alldata()
    {
        return $this->data;
    }
}
