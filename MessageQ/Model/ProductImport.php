<?php

namespace Tejas\MessageQ\Model;

use Tejas\MessageQ\Api\ProductImportInterface;
use Tejas\MessageQ\Api\ProductInterface;
use Tejas\MessageQ\Publisher\ProductImport as Publisher;

class ProductImport implements ProductImportInterface
{
    /**
     * @var Publisher
     */
    private $publisher;
    
    /**
     * ProductImport constructor.
     * @param Publisher $publisher
     */
    public function __construct(Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function update(ProductInterface $product)
    {
        return $this->publisher->publish([$product->getSku()]);
    }

}