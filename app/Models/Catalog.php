<?php
namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class Catalog extends Model {
    protected $table = 'catalog';
    protected $fillable = [
        'title',
        'description',
    ];
    public function getCatalogList() {
        return Catalog::all()->toArray();
    }
    public function product() {
        $this->hasMany('Product');
    }
}