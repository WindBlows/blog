<?php
namespace app\home\controller;
use think\Controller;

class Work extends Controller
{
    public function index()
    {
        return view('work');
    }
}