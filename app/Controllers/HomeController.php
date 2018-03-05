<?php


namespace App\Controllers;
use Slim\Views\Twig as View;

class HomeController extends Controller
{
    public function index($request, $response) {
        /**
         * Creating user data
         */
        /*User::create([
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password' => 'lel123',
        ]);*/
        return $this->view->render($response, 'home.twig');
    }
}