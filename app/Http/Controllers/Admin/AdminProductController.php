<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attribute_AttributeValue;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Attribute;

class AdminProductController extends Controller
{
    // return index product
    public function index()
    {
        $products = Product::all();
        $data = [
            'products' => $products
        ];
        return view('admin.product.index',$data);
    }
    // return form create product
    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('admin.product.create',$data);
    }
    // save product and return index product
    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->route('admin.product.index');
    }
    //get form edit product
    public function edit(Request $request,$id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $attribute_product = Product_Attribute::where('pa_product_id',$id)->get();
        $data = [
            'product' => $product,
            'categories' => $categories,
            'attribute_product' => $attribute_product
        ];
        return view('admin.product.edit',$data);
    }
    // update product 
    public function update(Request $request,$id)
    {
        $this->insertOrUpdate($request,$id);
        return redirect()->route('admin.product.index');
    }
    //insert or update
    public function insertOrUpdate($request,$id='')
    {
        // create variable product
        $product = new Product();
        // check id ! if id exist => this is update product and opposite
        if($id)
        {
            $product = Product::find($id);
        }
        $product->pro_name = $request->pro_name;
        $product->pro_name_slug = str_slug($request->pro_name);
        $product->pro_description = $request->pro_description;
        $product->pro_content = $request->pro_content;
        $product->pro_category_id = $request->pro_category_id;
        $product->pro_price = $request->pro_price;
        $product->pro_number = $request->pro_number;
        $product->pro_sale = $request->pro_sale;
        // check img exist for insert img in database
        if($request->hasFile('pro_image')){
            // get file
            $file=$request->file('pro_image');
            //get name file
            $name=$file->getClientOriginalName();
            //random name file for save database
            $Hinh = str_random('3')."_".$name;
            //check file exist
            while(file_exists("public/upload/pro_image/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            // save file
            $file->move("public/upload/pro_image",$Hinh);
            $product->pro_image = $Hinh;
        }
        // check id ! if id exist => this is update product and opposite
        if($id)
        {
            // delete product_attribute exist
            Product_Attribute::where('pa_product_id',$id)->delete();
            // get attribute if Request->variable is int !! That is attribute
            foreach($request->all() as $key => $value){
                if(is_int($key))
                {
                    // variable for check exist attribute value
                    $check_attribute_value = Attribute_AttributeValue::where(
                        [
                            ['atv_attribute_id','=',$key],
                            ['atv_value','=',$value]
                        ]
                        )->first();
                    if($check_attribute_value)
                    {
                    // save product_id and atribute_value_id in product_atribute
                      $product_attribute = new Product_Attribute();
                      $product_attribute->pa_product_id = $product->id;
                      $product_attribute->pa_attribute_value_id = $check_attribute_value->id ;
                      $product_attribute->save();
                    }
                    else
                    {
                        // create attribute value id
                        $attribute_value = new Attribute_AttributeValue();
                        $attribute_value->atv_attribute_id = $key;
                        $attribute_value->atv_value = $value;
                        $attribute_value->save();
                        // save product_id and atribute_value_id in product_atribute
                        $product_attribute = new Product_Attribute();
                        $product_attribute->pa_product_id = $product->id;
                        $product_attribute->pa_attribute_value_id = $attribute_value->id ;
                        $product_attribute->save();
                    }
                }
            }
        }
        $product->save();
        if(!$id)
        {
            foreach($request->all() as $key => $value){
                if(is_int($key)){
                    // check exist attribute value
                    $check_attribute_value = Attribute_AttributeValue::where(
                        [
                            ['atv_attribute_id','=',$key],
                            ['atv_value','=',$value]
                        ]
                        )->first();
                    if($check_attribute_value)
                    {
                      // save product_id and atribute_value_id in product_atribute
                      $product_attribute = new Product_Attribute();
                      $product_attribute->pa_product_id = $product->id;
                      $product_attribute->pa_attribute_value_id = $check_attribute_value->id ;
                      $product_attribute->save();
                    }
                    else
                    {
                        // create attribute value id
                        $attribute_value = new Attribute_AttributeValue();
                        $attribute_value->atv_attribute_id = $key;
                        $attribute_value->atv_value = $value;
                        $attribute_value->save();
                        // save product_id and atribute_value_id in product_atribute
                        $product_attribute = new Product_Attribute();
                        $product_attribute->pa_product_id = $product->id;
                        $product_attribute->pa_attribute_value_id = $attribute_value->id ;
                        $product_attribute->save();
                    }
                }
            }
        }
    }
    // handle product
    public function handle(Request $request,$action,$id)
    {
        $product = Product::find($id);
        switch ($action) {
            case 'delete':
                Product_Attribute::where('pa_product_id',$id)->delete();
                $product->delete();
                break;
            
            default:
                dd("Lỗi r");
                break;
        }
        return redirect()->route('admin.product.index');
    }
    // ajax get attribute product follow category
    public function getAttribute(Request $request)
    {
        $category = Category::find($request->pro_category_id);
        // check if this is update or add !! if id ==0 this is add form and opposite
        if($request->id==0)
        {
            //render html
            $html = view('admin.product.getattribute',compact('category'))->render();
        }
        else
        {
            // get product
            $product = Product::find($request->id);
            $data = [
                'product' => $product,
                'category' => $category
            ];
            //render html
            $html = view('admin.product.getattribute',$data)->render();
        }
        return \response()->json($html);
        // return view('admin.product.getattribute',compact('category'));
    }
    

}
