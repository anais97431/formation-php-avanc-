<?php


class ArticleRepository
{

    // load from database
    public function getArticles()
    {
        usleep(200);
        return [
            'Développement PHP Objet',
            'Les design patterns',
            'Framework Symfony',
        ];
    }
}