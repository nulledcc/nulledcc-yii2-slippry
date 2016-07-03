<?php
namespace nulledcc\slippry;
use yii\web\AssetBundle;

class SlippryJqueryAsset extends AssetBundle
{
    public $sourcePath='@bower/slippry';

    public $js=[
        'dist/slippry.min.js'
    ];

    public $css=[
        'dist/slippry.css'
    ];
    public $images=[
        'images/arrows.svg',
        'images/sy-loader.gif'
    ];
    public $depends=[
        'yii\web\JqueryAsset'
    ];

}