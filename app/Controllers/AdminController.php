<?php

namespace App\Controllers;
use App\Models\User;

class AdminController extends Controller {
    public function index ($request, $response) {

        return $this->view->render($response, 'admin/index.twig');
    }

    public function showCatalogs($request, $response) {


    }
    public function addCatalog($request, $response) {

        return $this->view->render($request, 'admin/catalog/add-catalog.twig');
    }
    public function createCatalog($request, $response) {

        return $this->view->render($response, 'admin/index.twig');
    }
}