<?php
/*
|--------------------------------------------------------------------------
| Create The Application (Slim and Lumen minimal based)
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application so it is ready to receive HTTP / Console requests
| from the environment.
|
 */

$app = require __DIR__ . '/../loader/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
 */

$app->run();
