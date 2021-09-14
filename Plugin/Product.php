<?php
namespace YMSLI\Demo\Plugin;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $product, $name){
         return "Apple ".$name;
    }
}