<?php
namespace app\home\controller;
use think\Controller;
use think\Config;
class Index extends Controller
{
    public function index()
    {
        //var_dump(Config::get());
        return view('index');
    }
}