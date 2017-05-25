<?php
namespace app\home\controller;
use think\Controller;

class blog extends Controller
{
    public function index()
    {
        return view('blog');
    }
}