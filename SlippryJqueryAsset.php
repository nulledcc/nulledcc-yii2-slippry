<?php
namespace nulledcc\slippry;
use yii\web\AssetBundle;

class SlippryJqueryAsset extends AssetBundle
{
    public $sourcePath='@bower/slippry/dist';

    public $js=[
        'slippry.min.js'
    ];

    public $css=[
        'slippry.css'
    ];

    public $depends=[
        'yii\web\JqueryAsset'
    ];

}