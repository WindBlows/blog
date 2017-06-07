<?php
namespace app\home\controller;
use think\Controller;

class Blog extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function detail()
    {
        return view('detail');
    }
}