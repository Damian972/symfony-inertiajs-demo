<?php

namespace App\Controller;

use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/about")
 */
class AboutController extends AbstractController
{
    /**
     * @Route("", name="about")
     */
    public function index(InertiaInterface $inertia): Response
    {
        return $inertia->render('About', [], ['title' => 'About']);
    }
}
