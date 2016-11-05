<?php
/**
 * Created by PhpStorm.
 * User: yangyue
 * Date: 16-10-6
 * Time: 下午2:35
 * 建立工厂 creator
 */
 abstract class Creator{
     protected abstract function factoryMethod();
     
     public function startFactory()
     {
         $mfg = $this->factoryMethod();
         return $mfg;
     }
 }