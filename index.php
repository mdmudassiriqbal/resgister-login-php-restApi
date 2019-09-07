<?php



require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();


$klein->respond('GET','/', function () {
    echo "Home page";
    echo "<br><a href='user/login'>login here!</a>";
});

$klein->respond('GET', '/user/login', function () {
    return 'login page';
});

$klein->respond('GET', '/user/register', function () {
    return 'register page';
});

$klein->respond('GET', '/user/verify', function () {
    return 'verification';
});


$klein->dispatch();

?>