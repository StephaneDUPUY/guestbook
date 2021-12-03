<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     */
    // @Route("/", name="homepage")
    public function index(string $name = ''): Response
    {
        /*
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);
        */

        /*
        return new Response(
            <<<EOF
            <html>
            <body>
                <img src="/images/under-construction.gif" />
            </body>
            </html>
            EOF
        );
        */

        $greet = '';
        if ($name) {
            $greet = sprintf('<h1>Salut %s!</h1>', htmlspecialchars($name));
        }

        return new Response(
            <<<EOF
            <html>
                <body>
                    $greet
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
        );
    }
}
