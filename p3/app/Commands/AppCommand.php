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
            'outcome' => 'tinyint(1)',
        ]);

        // Confirmation that table was created
        dump('Migration complete; check the database for your new tables.');
    }

    public function seed()
    {
        $results = new \App\Results($this->app->path('database/results.json'));
        foreach ($results->getAll() as $result) {

            // Convert outcome boolean to int
            $result['outcome'] = $result['outcome'] ? 1 : 0;
    
            // Insert result to database
            $this->app->db()->insert('results', $result);
        }
    
        // Display all results in console to confirm insertion
        dump($this->app->db()->all('results'));
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}