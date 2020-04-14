<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class AdminArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        $data = [
            'articles' => $articles
        ];
        return view('admin.article.index',$data);
    }
    public function create()
    {
        return view('admin.article.create');
    }
    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->route('admin.article.index');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        $data= [
            'article' => $article
        ];
        return view('admin.article.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $this->insertOrUpdate($request, $id);
        return redirect()->route('admin.article.index');
    }
    public function handle(Request $request,$action,$id)
    {
        $article = Article::find($id);
        switch ($action) {
            case 'delete':
                $article->delete();
                break;
            
            default:
                dd("Lỗi r");
                break;
        }
        return redirect()->route('admin.article.index');
    }
    public function insertOrUpdate($request, $id='')
    {
        $article = new Article();
        if($id)
        {
            $article = Article::find($id);
        }
        $article->a_name = $request->a_name;
        $article->a_name_slug = str_slug($request->a_name);
        $article->a_description = $request->a_description;
        $article->a_content = $request->a_content;
        // check img exist for insert img in database
        if($request->hasFile('a_image')){
            // get file
            $file=$request->file('a_image');
            //get name file
            $name=$file->getClientOriginalName();
            //random name file for save database
            $Hinh = str_random('3')."_".$name;
            //check file exist
            while(file_exists("public/upload/a_image/".$Hinh)){
                $Hinh = str_random('3')."_".$name;
            }
            // save file
            $file->move("public/upload/a_image",$Hinh);
            $article->a_image = $Hinh;
        }
        $article->save();
    }
}
