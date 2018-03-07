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
    public function getProductList() {
        return Product::all()->toArray();
    }
    public function catalog() {
        $this->belongsTo('Catalog');
    }
}