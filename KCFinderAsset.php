<?php
namespace firdows\mkeditor;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Materialize css files.
 *
 * @author kuakling <kuakling@gmail.com>
 * @since 2.0
 */
class KCFinderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sunhater/kcfinder';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = ['yii\web\JqueryAsset'];
    
    public $publishOptions = [
        'forceCopy'=>true,
    ];
}
