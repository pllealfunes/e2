<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('results', [
            'guess' => 'varchar(255)',
            'win' => 'tinyint(1)',
        ]);

        // Confirmation that table was created
        dump('Migration complete; check the database for your new tables.');
    }

    public function seed()
    {
        $results = new \App\Results($this->app->path('database/results.json'));
        foreach ($results->getAll() as $result) {
            
            // ID will get automatically added so no need to add
            unset($result['id']);
            
            // Convert win result to numeric equivalent
            $result['win'] = $result['win'] ? 1 : 0;
    
            // Insert result to database
            $this->app->db()->insert('results', $result);
        }
    
        // Display all results in console to confirm insertion
        dump($this->app->db()->all('results'));
    }

    // Run command in console to initiate migration and seeds
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}