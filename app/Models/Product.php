<?php
namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'product';
    protected $fillable = [
        'title',
        'description',
        'year',
        'price',
    ];
//    protected $catalogTitle = Product::where('')
    public function getProductList() {

        return Product::all()->toArray();
    }

    public function catalog() {
        $this->belongsTo('Catalog');
    }
}