<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public function Category()
    {
        return $this->belongsTo(Category::class,'pro_category_id');
    }
    public function ProductAndAttributeValue()
    {
        return $this->belongsToMany(Attribute_AttributeValue::class,'product_attribute','pa_product_id','pa_attribute_value_id');
    }
}
