<?php

namespace App\Controller\Blog;

use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("", name="blog.index")
     */
    public function index(InertiaInterface $inertia): Response
    {
        return $inertia->render('blog/Index');
    }
}
