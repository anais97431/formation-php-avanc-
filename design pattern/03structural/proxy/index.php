<?php

include __DIR__.'/RepositoryCacheProxy.php';

$cacheProxy = new RepositoryCacheProxy();

$t1 = microtime(true);
$cacheProxy->getArticles();
$t2 = microtime(true);
$cacheProxy->getArticles();
$t3 = microtime(true);
$cacheProxy->getArticles();
$t4 = microtime(true);

echo ($t2-$t1)*pow(10,6).'µs | '
        .($t3-$t2)*pow(10,6).'µs | '
        .($t4-$t3)*pow(10,6).'µs '."\n";