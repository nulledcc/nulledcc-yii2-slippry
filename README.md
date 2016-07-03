# yii2-slippry
The slippry slider widget for the Yii framework.
See more here: http://slippry.com

### NOTE(WARNING)
To load images arrows.svg and sy-loader.gif
change default in slippry.css to
```css
background: url("../images/sy-loader.gif") 50% 50% no-repeat;
background-image: url("../images/arrows.svg");
```

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require nulledcc/yii2-slippry:dev-master
```

or add

```
"nulledcc/yii2-slippry": "dev-master"
```

to the `require` section of your `composer.json` file.
## Usage
```php
<?=\nulledcc\slippry\slippry::widget([
      'items'=>[
          ["img"=>"http://paygate.or.kr/wp-content/uploads/2013/11/slider__wat.png","a"=>["href"=>"http://mysite.com/"]],
            "http://parallaxslider.com/images/classic/bulletsFullWidth/02_bulletsFW.jpg"
      ],
      'clientOptions'=>[
          'accepts'=>'random',
      ]
 ]);?>
```
