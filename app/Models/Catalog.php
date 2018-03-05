<?php
namespace App\Models;
use App\Controllers\CatalogController;
use \Illuminate\Database\Eloquent\Model;

class Catalog extends Model {
    protected $table = 'catalog';
    protected $fillable = [
        'title',
        'description',
        'price'
    ];
    public function getCatalogList() {
        return Catalog::all()->toArray();
    }
}