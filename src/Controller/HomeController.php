<?php

namespace App\Controller;

use App\Entity\Person;
use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("", name="homepage")
     */
    public function index(InertiaInterface $inertia): Response
    {
        $person = new Person('Bill Doe', 'Policeman');

        return $inertia->render('Home', ['person' => $person]);
    }
}
