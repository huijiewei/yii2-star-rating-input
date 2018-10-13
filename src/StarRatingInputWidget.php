<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/12
 * Time: 14:56
 */

namespace huijiewei\StarRatingInput;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\InputWidget;

class StarRatingInputWidget extends InputWidget
{
    public function init()
    {
        parent::init();

        $this->options = ArrayHelper::merge([
            'id' => $this->id,
            'type' => 'number',
            'class' => 'rating',
            'data-icon-lib' => 'fa',
            'data-active-icon' => 'fa-star',
            'data-inactive-icon' => 'fa-star-o',
        ], $this->options);

        StarRatingInputAsset::register($this->getView());
    }

    public function run()
    {
        if ($this->hasModel()) {
            $html = Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            $html = Html::textInput($this->name, $this->value, $this->options);
        }

        return $html;
    }
}
