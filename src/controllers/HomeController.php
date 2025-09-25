<?php

namespace App\controllers;

use Ngomafortuna\RouteSystemSimple\Controller;
use App\services\TimeZone;


class HomeController extends Controller
{
    public function index():void {

        $timeZone = new TimeZone;

        // var_dump($timeZone->get(), $timeZone->getDate());
        // die;

        $this->view->render('home', [
            'title' => 'Home page',
            'description' => 'This is the home page.',
            'timezones' => $timeZone->get()
        ]);
        
    }
}