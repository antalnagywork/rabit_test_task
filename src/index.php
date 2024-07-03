<?php

const ROUTES = ['' => 'HomeController@getHomePage',
    'home' => 'HomeController@getHomePage',
    'users' => 'UserController@getUsersPage',
    'advertisements' => 'AdvertisementController@getAdvertisementsPage'];


$url = isset($_GET['url']) ? $_GET['url'] : '';
if (array_key_exists($url, ROUTES)) {
    $parts = explode('@', ROUTES[$url]);
    $controller = $parts[0];
    $action = $parts[1];

    require_once __DIR__ . '/controllers/' . $controller . '.php';
    $controllerInstance = new $controller();
    $controllerInstance->$action();
} else {
    echo "404 Not Found";
}


?>
