<?php
namespace App\Controller;

use App\Services\Greeting;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetingController extends AbstractController
{
    /**
     * @param Greeting $greeting
     * @param Request $request
     * @Route("/greeting",name="blog_index")
     * @return Response
     */
    public function greet(Greeting $greeting, Request $request)
    {
        $name = $request->get('name', 'World');
        $greeting->log('Greeting to ' . $name);
        return $this->render('base.html.twig', ['name' => $name]);
    }
}
