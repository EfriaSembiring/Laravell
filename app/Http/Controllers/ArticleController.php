<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArticleController extends Controller
{
    public function articles($id){
    	$hasil = Article::find($id);
    	return view('Article', ['id'=>$id])->with(compact('hasil'));
    }
    public function blog ($id){
    	//return view ('Blog')
    	$blog=Article::all(); 
    	return view('Article',['id' => $id])->with(compact('findArticle'));

}
}