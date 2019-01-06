<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ltAppAsset extends AssetBundle
{
    public $jsons = [
        'js/html5shiv.min.js',
    ];
    public $jsOptions = [
            'condition' => 'lte IE10',
            'position' => \yii\web\View::POS_HEAD
        ];

}
