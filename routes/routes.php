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

/**
 * admin part -->
 */
    $this->get('/admin', 'AdminController:index')->setName('admin_index');
    $this->get('/admin/catalog/add', 'AdminController:addCatalog')->setName('add-catalog');
    $this->get('/admin/catalog/', 'AdminController:showCatalogList')->setName('show-catalog');
    $this->get('/admin/product/add', 'AdminController:addProduct')->setName('add-product');
    $this->get('/admin/product', 'AdminController:showProductList')->setName('show-product');
    $this->get('/admin/product/delete/{id}', 'AdminController:deleteProduct')->setName('delete-product');

    /**
 * api part -->
 */
    $this->get('/api/catalog/add', 'AdminController:createCatalog')->setName('add-catalog_api');
    $this->post('/api/catalog/add', 'AdminController:createCatalog');

    $this->get('/api/product/add', 'AdminController:createProduct')->setName('add-product_api');
    $this->post('/api/product/add', 'AdminController:createProduct');

    $this->post('/ajax/product/add', 'AdminController:ajaxCreateProduct')->setName('add-product_ajax');

})->add(new AuthMiddleware($container));


/**
 * public part -->
 */
$app->group('', function() {
    $this->get('/', 'HomeController:index')->setName('home');
    $this->get('/catalog', 'CatalogController:index')->setName('Catalog');
});






