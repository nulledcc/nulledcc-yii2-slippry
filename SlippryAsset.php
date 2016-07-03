<?php
namespace nulledcc\slippry;
use yii\web\AssetBundle;

class SlippryAsset extends AssetBundle
{
    public $sourcePath='@bower/slippry/dist';

    public $js=[
        'slippry.min.js'
    ];

    public $css=[
        'slippry.css'
    ];

}