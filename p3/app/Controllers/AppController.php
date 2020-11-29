<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $animals = [
            'tiger' => 'description',
            'moose' => 'description2',
            'cat' => 'description3',
         ];
 
         
        $randAnimal = array_rand($animals, 1);
        $randDescription = $animals[$randAnimal];

        dump($randAnimal);
        dump($randDescription);
        $guess = $this->app->old('guess');
    
        return $this->app->view('index', [
        'guess' => $guess,
        'randDescription' => $randDescription,
        'randAnimal' => $randAnimal,
        ]);
    }
}