<?php

namespace App\Controller\Blog;

use App\Repository\PostRepository;
use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("", name="blog.index")
     */
    public function index(InertiaInterface $inertia, PostRepository $repository): Response
    {
        return $inertia->render('blog/Index', ['posts' => $repository->findAll()], ['title' => 'Blog']);
    }

    /**
     * @Route("/post/{post_id}", name="blog.show", requirements={"post_id":"\d+"})
     */
    public function show(InertiaInterface $inertia, PostRepository $repository, int $post_id): Response
    {
        if (0 < $post_id && $post = $repository->find($post_id)) {
            return $inertia->render('blog/Post', ['post' => $post], ['title' => 'Blog - '.$post->getTitle()]);
        }

        throw new NotFoundHttpException();
    }
}
