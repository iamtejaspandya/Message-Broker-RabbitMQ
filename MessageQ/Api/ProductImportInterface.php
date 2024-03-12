<?php

namespace Tejas\MessageQ\Api;

use Tejas\MessageQ\Api\ProductInterface;

interface ProductImportInterface
{
    /**
     * @param ProductInterface $product[]
     * @return mixed
     */
    public function update(ProductInterface $product);
}