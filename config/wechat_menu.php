<?php

return [
    /*
     * axios 请求的路由前缀，最终会请求这个地址 routePrefix/resources
     *
     * 请注意，你填写的 'wechat-menu' 和 '/wechat-menu' 是有区别的
     */
    'routePrefix' => '/wechat-menu', // 这个前缀，跟第一步中的第二个路由的前缀要一样
    /*
     * 存储微信菜单和事件设置的文件
     * 可以自行用其他方式来存储和读取
     */
    'data_path' => storage_path('wechat_menu.json'),
    /*
     * 微信事件回调出错时，返回给用户微信的消息
     */
    'handler_error_msg' => '服务器开小差了',
    /*
     * easy wechat 扩展的配置
     */
    'easyWechat' => [
        'app_id' => env('WECHAT_OFFICIAL_APP_ID'),
        'secret' => env('WECHAT_OFFICIAL_SECRET'),
        'token' => env('WECHAT_OFFICIAL_TOKEN'),
        'log' => [
            'default' => 'dev', // 默认使用的 channel，生产环境可以改为下面的 prod
            'channels' => [
                // 测试环境
                'dev' => [
                    'driver' => 'single',
                    'path' => storage_path('logs/wechat.log'),
                    'level' => 'debug',
                ],
                // 生产环境
                'prod' => [
                    'driver' => 'daily',
                    'path' => storage_path('logs/wechat.log'),
                    'level' => 'info',
                ],
            ],
        ],
    ],
];
