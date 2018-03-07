<?php

namespace App\Controllers;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\User;
class AdminController extends Controller {
    public function index ($request, $response)
    {

        return $this->view->render($response, 'admin/index.twig');
    }
    /**
     * catalog ->
     */

    public function showCatalogList($request, $response) {
        $catalog = new Catalog;
        $catalog = $catalog->getCatalogList();
        return $this->view->render($response, 'admin/catalog/index.twig', compact('catalog'));
    }

    public function showProductList($request, $response) {
        $product = new Product;
        $product = $product->getProductList();
        return $this->view->render($response, 'admin/catalog/product/index.twig', compact('product'));
    }

    public function addCatalog($request, $response) {

        return $this->view->render($response, 'admin/catalog/add-catalog.twig');
    }

    public function addProduct($request, $response) {
        $select = new Catalog;
        $select = $select->getCatalogList();
        return $this->view->render($response, 'admin/catalog/product/add-product.twig', compact('select'));
    }

    public function createCatalog($request, $response) {
        $catalog = Catalog::create([
            'title' => $request->getParam('title'),
            'description' => $request->getParam('description'),
        ]);
        return $response->withRedirect($this->router->pathFor('admin_index'));
    }

    public function createProduct($request, $response) {
        $catalog = Product::create([
            'title' => $request->getParam('title'),
            'description' => $request->getParam('description'),
            'year' => $request->getParam('year'),
            'price' => $request->getParam('price'),
            'catalog_id' => $_POST['catalog_id'],
        ]);
        return $response->withRedirect($this->router->pathFor('admin_index'));
    }

}