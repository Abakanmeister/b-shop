<?php
namespace App\Controllers;
use App\Models\Catalog;
use App\Models\Product;

class CatalogController extends Controller {
    public function index($request, $response) {
        $product = new Product();
        $product = $product->getProductList();
        return $this->view->render($response, 'public/catalog/index.twig', compact('product'));
    }
}