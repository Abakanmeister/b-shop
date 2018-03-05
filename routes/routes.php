<?php
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

/**
 * auth part -->
 */
$app->group('', function() {
    $this->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
    $this->post('/auth/signup', 'AuthController:postSignUp');
    $this->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin');
    $this->post('/auth/signin', 'AuthController:postSignIn');
})->add(new GuestMiddleware($container));

$app->group('', function() {
    $this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');
    $this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
    $this->post('/auth/password/change', 'PasswordController:postChangePassword');
})->add(new AuthMiddleware($container));


/**
 * public part -->
 */
$app->group('', function() {
    $this->get('/', 'HomeController:index')->setName('home');
    $this->get('/catalog', 'CatalogController:index')->setName('Catalog');
});

/**
 * admin part -->
 */
$app->group('/admin', function() {
    $this->get('', 'AdminController:index')->setName('admin_index');
    $this->get('/catalog/add', 'AdminController:addCatalog');
});

/**
 * api part -->
 */
$app->group('/api', function() {
    $this->post('/category/add', 'AdminController:createCatalog');
});




