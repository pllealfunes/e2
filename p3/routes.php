<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/history' => ['GameController', 'index'],
    '/details' => ['GameController', 'details'],
    '/play' => ['GameController', 'playerGuess'],
];