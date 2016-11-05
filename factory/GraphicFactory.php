<?php
/**
 * Created by PhpStorm.
 * User: yangyue
 * Date: 16-10-6
 * Time: 下午2:57
 */
include_once "GraphicProduct.php";
include_once "Creator.php";
class GraphicFacory extends Creator{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return $product->getProperties();
    }
}