<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Largezhou\WechatMenu\Content;
use Largezhou\WechatMenu\Controller as WechatMenuController;
use Largezhou\WechatMenu\Manager;

class HomeController extends Controller
{
    use WechatMenuController;

    public function index()
    {
        $menuHtml = Content::renderWechatMenu();
        return view('index', compact('menuHtml'));
    }

    public function wechatMenuAjax()
    {
        return $this->resources();
    }

    public function serve()
    {
        return Manager::getInstance()->serve();
    }
}
