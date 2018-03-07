<?php

namespace App\Controllers;
use App\Models\Catalog;
use App\Models\User;

class AdminController extends Controller {
    public function index ($request, $response) {
        return $this->view->render($response, 'admin/index.twig');
    }


    /**
     * catalog ->
     */

    public function showCatalogsList($request, $response) {
        $catalog = new Catalog;
        $catalog = $catalog::all()->sortByDesc('id')->toArray();
        return $this->view->render($response, 'admin/catalog/index.twig', compact('catalog'));
    }

    public function addCatalog($request, $response) {

        return $this->view->render($response, 'admin/catalog/add-catalog.twig');
    }

    public function createCatalog($request, $response) {
        $catalog = Catalog::create([
            'title' => $request->getParam('title'),
            'description' => $request->getParam('description'),
        ]);

        return $response->withRedirect($this->router->pathFor('admin_index'));
    }

    public function createProduct($request, $response) {
        $catalog = Catalog::create([
            'title' => $request->getParam('title'),
            'description' => $request->getParam('description'),
        ]);

        return $response->withRedirect($this->router->pathFor('admin_index'));
    }

}