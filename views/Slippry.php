<?php
use yii\helpers\BaseHtml
$context=$this->context;

if(!is_null($context->items)) :
?>
    <ul id="<?=(isset($context->options['id'])) ? 'slippry'.$context->options['id'] : 'slippry'.$context->uniqID;?>" <?=(isset($context->options['class'])) ? 'class='.$context->options['class']: "";?>>
        <?php
            foreach ($context->items as $value) {
                echo "<li>";
                if(is_array($value)){
                    $op = (isset($value["imgOptions"])) ? $value["imgOptions"] : "";
                    if(isset($value["a"])){
                        echo Html::beginTag("a",$value["a"]);
                            echo Html::img($value["img"],$op);
                        echo Html::endTag("a")
                    }else{
                       echo Html::img($value["img"],$op);
                    }
                }else{
                    echo Html::img($value);
                }
                echo "</li>";
            }
        ?>
    </ul>
<?php
endif;
?>