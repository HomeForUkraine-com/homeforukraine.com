<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Capsule\Manager as DB;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

/// Debug costants
define('DEBUG', 0); // should be useless - replace it with checked
// Sign particular part of code to remember with keyword __FOCUS

$GLOBALS['testEnv'] = true;

// Global settings to make definitive
$GLOBALS['!list_space'] = 'Host refugees';
$GLOBALS['!pricing_definition'] = 'Expense reimbursements';

$GLOBALS['!social_login_warning'] = '
    <div style="margin:5px; font-style: italic;">
        <b>Warning:</b> the login through Facebook and Google are in the process of validation by the companies.<br>
        For the moment sign in the website using standard registration and login forms. <b>Thank you for your patience!</b>
    </div>';

$GLOBALS['disableMapPointer'] = true; // until Google API activation

$GLOBALS['localeExceptionCatch'] = true; 

function checked($var){
    if(!isset($GLOBALS[$var]))
        return false;

    return $GLOBALS[$var];
}

// Fast test command
if(isset($_GET['cmd']) && checked('testEnv')){
    include('config.php');

    $Capsule = new Capsule;
    $Capsule->addConnection($GLOBALS['config']['db']);
    $Capsule->setAsGlobal();  //this is important
    $Capsule->bootEloquent();

    switch($_GET['cmd']){
        case 'superficialUserDelete':
            if(!isset($_GET['id']))
                goto normal;

            $id = $_GET['id'];
            DB::delete('DELETE FROM users WHERE id='.$id);
            DB::delete('DELETE FROM users_verification WHERE user_id='.$id);
            DB::delete('DELETE FROM user_details WHERE user_id='.$id);
            echo 'done.';

            break;

        default:
            echo 'unrecognized cmd';
    }
    exit;
}

normal:

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
