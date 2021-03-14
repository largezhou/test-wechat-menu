<?php

namespace App\Services;

use EasyWeChat\Kernel\Messages\Image;
use Illuminate\Support\Arr;

class WechatMenuHandler
{
    public function aiCore($payload)
    {
        if (Arr::get($payload, 'MsgType') !== 'text') {
            return Arr::random([
                '听不懂',
                '你说啥呢？',
                '请说中文！',
            ]);
        }

        $text = trim(Arr::get($payload, 'Content'));
        if (empty($text)) {
            return '，，，';
        }

        $text = str_replace(['吗', '?', '？'], ['', '!', '！'], $text);

        return (string) $text;
    }

    public function location($payload)
    {
        return '欢迎来自 '.Arr::get($payload, 'Label', '未知领域').' 的朋友';
    }

    public function image($payload)
    {
        if (Arr::get($payload, 'MsgType') !== 'image' || !($mediaId = Arr::get($payload, 'MediaId'))) {
            return '没有图啊';
        }

        return new Image($mediaId);
    }
}
