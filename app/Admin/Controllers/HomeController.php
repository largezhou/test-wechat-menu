<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Largezhou\WechatMenu\Content as WechatMenuContent;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }

    public function wechatMenu(Content $content)
    {
        return $content
            ->title('公众号菜单管理')
            ->description('好用的菜单管理')
            ->row(function (Row $row) {
                $row->column(12, function (Column $column) {
                    $column->append(WechatMenuContent::renderWechatMenu());
                });
            });
    }
}
