<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/12
 * Time: 14:56
 */

namespace huijiewei\StarRatingInput;

use huijiewei\fontawesome\FontAwesomeAsset;
use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class BootstrapRatingInputAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap-rating-input/build';

    public $js = [
        'bootstrap-rating-input.min.js',
    ];

    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
        FontAwesomeAsset::class
    ];
}
