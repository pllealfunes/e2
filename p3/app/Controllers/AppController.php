<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        // Array of animals to guess along with movie/tv/marketing reference
        $animals = [
            'toucan' => 'Froot Loops',
            'hedgehog' => 'Sonic the ........',
            'hippo' => 'Moto Moto...The name is so nice you say it twice',
            'octopus' => 'Poor unfortunate souls
            In pain, in need
            This one longing to be thinner
            That one wants to get the girl
            And do I help them?
            Yes, indeed
            Those poor unfortunate souls
            So sad, so true
            They come flocking to my cauldron
            Crying, "Spells, Ursula, please!"
            And I help them
            Yes, I do',
            'camel' => "If it's Wednesday...Happy Hump Day!",
            'orca' => 'Free Willy',
            'gecko' => 'Fifteen minutes could save you 15% or more on car insurance.'

         ];
 
        // Random animal along with their description chosen from array above
        $randAnimal = array_rand($animals, 1);
        $randDescription = $animals[$randAnimal];

        // Get player's guess and message from session
        $guess = $this->app->old('guess');
        $win = $this->app->old('win');
        
    
        return $this->app->view('index', [
        'guess' => $guess,
        'win' => $win,
        'randDescription' => $randDescription,
        'randAnimal' => $randAnimal,
        ]);
    }
}