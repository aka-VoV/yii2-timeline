<?php

namespace memclutter\yii\timeline;

use yii\web\AssetBundle;

class TimelineAsset extends AssetBundle
{
    public $sourcePath = '@vendor/memclutter/yii2-timeline/assets';
    public $css = [
        'css/timeline.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}