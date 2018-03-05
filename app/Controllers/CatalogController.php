<?php
namespace App\Controllers;
use App\Models\Catalog;
class CatalogController extends Controller {

    public function index($request, $response) {
        $catalog = new Catalog();
        $catalog = $catalog->getCatalogList();
        return $this->view->render($response, 'index.twig', [$catalog]);
    }
}