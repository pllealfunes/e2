<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function practice()
    {
        # Set up make a connection to the database
        $host = $this->app->env('DB_HOST');
        $database = $this->app->env('DB_NAME');
        $username = $this->app->env('DB_USERNAME');
        $password = $this->app->env('DB_PASSWORD');
        $charset = $this->app->env('DB_CHARSET', 'utf8mb4');

        # DSN (Data Source Name) string
        # contains the information required to connect to the database
        $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

        # Driver-specific connection options
        $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => false,
    ];

        try {
            # Create a PDO instance representing a connection to a database
            $pdo = new \PDO($dsn, $username, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        dump('Connection successful!');
    }

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
        $message = $this->app->old('message');
        
    
        return $this->app->view('index', [
        'guess' => $guess,
        'message' => $message,
        'randDescription' => $randDescription,
        'randAnimal' => $randAnimal,
        ]);
    }
}