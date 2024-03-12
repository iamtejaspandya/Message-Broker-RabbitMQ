<?php

namespace Tejas\MessageQ\Consumer;

class ProductImport
{
    public function consumerProcess($operation)
    {
        $path = "/../xampp/htdocs/m246/var/log/messageQueue.log";
        file_put_contents($path, $operation);
    }

}