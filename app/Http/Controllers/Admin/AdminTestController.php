<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminTestController extends Controller
{
    //
    public function index()
    {
        //test relationship category and attribute
        $category = Category::find(11);
        $ca = $category->Attributes;
        dd($ca);
    }
}
