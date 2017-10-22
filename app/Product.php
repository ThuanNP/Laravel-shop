<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_category(){
    	return $this->belongsTo("App\ProductCategory", "id_category", "id");
    }

    public function bill_detail(){
    	return $this->hasMany("App\BillDetail", "id_product", "id");
    }
}
