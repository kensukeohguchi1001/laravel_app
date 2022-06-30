<?php

namespace App\MyClasses;

class PowerMyService implements MyServiceInterface
{
  private $id = -1;
  private $msg = 'no id...';
  private $data = ['いちご', 'りんご', 'バナナ', 'みかん', 'ぶどう'];

  public function __construct()
  {
      $this->setId(rand(0,count($this->data) - 1));
  }

  public function setId($id)
  {
    $this->id = $id;
    if ($id >= 0 && count($this->data)) {
      $this->msg = "あなたが好きなのは、" . $id . '番目の' . $this->data[$id] . 'ですね';
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
