<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('This is my first page!');
    }
    /**
     * @Route("/news/{slag}")
     */
    public function show($slag)
    {
        return new Response(sprintf('Page: %s', $slag));
    }
}