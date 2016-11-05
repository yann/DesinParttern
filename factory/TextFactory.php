<?php
/**
 * Created by PhpStorm.
 * User: yangyue
 * Date: 16-10-6
 * Time: 下午2:43
 * text
 */
include_once ("Creator.php");
include_once ("TextProduct.php");
class TextFactory extends Creator{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return $product->getProperties();
    }
}