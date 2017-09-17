<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'includes/lib/autoload.php';
require_once 'includes/class/class.router.php';

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    require_once __DIR__ . '/views/start.php';
});

$router->get('/changelog/', function() {
  require_once __DIR__ . '/views/changelog.php';
});

$router->get('/feedback/', function() {
  require_once __DIR__ . '/views/feedback.php';
});

$router->get('/admin/', function() {
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] =! '')
      {require_once __DIR__ . '/views/admin.php';}
      else {
        require_once __DIR__ . '/views/start.php';
      }
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "error";
});

$router->run();
