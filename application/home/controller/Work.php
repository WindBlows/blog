<?php
namespace app\home\controller;
use think\Controller;

class work extends Controller
{
    public function index()
    {
        return $this->fetch('work');
    }
}