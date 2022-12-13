<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    #'/' => ['AppController', 'index'],
    '/' => ['GameController', 'game'],
    '/save' => ['GameController', 'save'],
    '/history' => ['AppController', 'history'],
    '/submit' => ['GameController', 'submit'],
    '/endgame' => ['GameController', 'endgame'],
    '/practice' => ['AppController', 'practice'],
];