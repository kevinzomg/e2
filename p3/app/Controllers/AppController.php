<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {   
        return $this->app->view('index');
    }

    public function test()
    {
        return $this->app->view('test');
    }
}