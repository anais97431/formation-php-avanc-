<?php

include __DIR__.'/ProductA.php';
include __DIR__.'/ProductB.php';

class ProductABBridge
{
    public function createB(ProductA $product): ProductB
    {
        $productB = new ProductB(); 
        $productB->name = $product->title;
        return $productB;
    }
    
}