<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/12
 * Time: 14:59
 */

namespace huijiewei\StarRatingInput;

use yii\web\AssetBundle;

class StarRatingInputAsset extends AssetBundle
{
    public $sourcePath = '@huijiewei/StarRatingInput/assets';

    public $css = [
        'css/star-rating.min.css',
    ];

    public $depends = [
        BootstrapRatingInputAsset::class,
    ];
}
