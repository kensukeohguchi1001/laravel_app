<?php

namespace App\MyClasses;

interface MyServiceInterface
{
    public function setId(int $id);
    public function data(int $id);
    public function say();
    public function alldata();
}
