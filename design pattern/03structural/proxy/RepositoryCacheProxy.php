<?php


include __DIR__.'/ArticleRepository.php';
class RepositoryCacheProxy
{

    private $repository;
    private $cache =[];

    public function __construct()
    {
        $this->repository = new ArticleRepository();
    }
    public function getArticles()
    {
        if(empty($this->cache)){
            $this->cache = $this->repository->getArticles();
        }
        return $this->cache;
    }
}