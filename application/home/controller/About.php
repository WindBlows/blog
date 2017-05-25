<?php
namespace app\home\controller;
use think\Controller;

class about extends Controller
{
    public function index()
    {
        return view('about');
    }
}