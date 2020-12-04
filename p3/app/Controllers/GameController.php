<?php

namespace App\Controllers;

class GameController extends Controller
{
    public function history()
    {
        // Get all the round history from the database and display
        return $this->app->view('pages.history', [ 'results' => $this->app->db()->all('results')]);
    }

    public function details()
    {
        // Get the specific round from the url
        $id = $this->app->param('id');

        // If no id is present, send the user to the history page
        if (is_null($id)) {
            $this->app->redirect('/history');
        }
        
        // Load the round details
        $result = $this->app->db()->findById('results', $id);
        return $this->app->view('pages.details', ['result' => $result]);
    }

    public function playerGuess()
    {
        // Validate input from user making sure it is not blank
        $this->app->validate([
            'guess' => 'required',
        ]);
        
        // Get input from form submission
        $guess = $this->app->input('guess');
        $animal = $this->app->input('animal');

        // Check if player's guess matches random animal
        if ($guess == $animal || $guess == ucfirst($animal)) {
            $win = true;
        } else {
            $win = false;
        }

        // Convert win to numeric equivalent
        $data = [
            'guess' => $guess,
            'win' => $win?1:0,
        ];

        // Save data to database on submit
        $this->app->db()->insert('results', $data);

        // On submit redirect player to homepage passing player guess and message if player lost or won
        $this->app->redirect('/', [
            'guess' => $guess,
            'win' => $win
            ]);
    }
}