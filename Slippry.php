<?php
namespace nulledcc\slippry;
use yii\base\Widget;
use yii\web\View;

/**
 * slippry widget
 * @see also http://slippry.com/examples/out-of-the-box/
 * <?=\nulledcc\slippry\slippry::widget([
 *      'items'=>[
 *          ["img"=>"http://paygate.or.kr/wp-content/uploads/2013/11/slider__wat.png","a"=>["href"=>"http://mysite.com/"]],
            "http://parallaxslider.com/images/classic/bulletsFullWidth/02_bulletsFW.jpg"
 *      ]
 *      'clientOptions'=>[
 *          'accepts'=>'random',
 *      ]
 * ]);?>
 */
class slippry extends Widget
{
    public $items=[];
    public $uniqID= uniqid();

    /**
     * @var array The HTML attributes for the container tag
     */
    public $options=[];

    /**
     * @var array client options
     * @see also http://slippry.com/settings/
     */
    public $clientOptions=[];

    public function init()
    {
        parent::init();
        if(empty($this->items))return null;

        $this->registerAsset();

        $clientOptions=!empty($this->clientOptions) ? json_encode($this->clientOptions) : '{}';
        $clientObj= () ? 'slippry'.ucwords($this->options['id']) : 'slippry'.$this->uniqID;
        $js="jQuery('#{$clientObj}').slippry({$clientOptions});";

        $position= View::POS_READY ;
        $this->view->registerJs($js,$position);
    }

    public function run()
    {
        if(empty($this->items))return null;
        return $this->render('slippry');
    }

    /**
     * Registers this asset bundle with a view
     */
    public function registerAsset()
    {
        SlippryJqueryAsset::register($this->view);
    }

}
