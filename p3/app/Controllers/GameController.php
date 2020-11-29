<?php

namespace App\Controllers;

class GameController extends Controller
{
    public function rounds()
    {
        return $this->app->view('pages.history');
    }

    public function details()
    {
        return $this->app->view('pages.details');
    }

    public function playerGuess()
    {
        $this->app->validate([
            'guess' => 'required',
        ]);
        
        $guess = $this->app->input('guess');

        /*if ($guess == $randAnimal) {
            $message = "Congrats you did it";
        } else {
            $message = "Aww try again";
        }*/

        $this->app->redirect('/', [
            'guess' => $guess,
            ]);
    }
}