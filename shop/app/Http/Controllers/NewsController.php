<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function getview(){

        $listNews = News::all();
        
        return view('news.list')->with('listNews',$listNews);
     }

     public function getCreate(){

        return view('news.create');
     }

     public function save(Request $request){
         $news = new news();
         $news->title = $request->title;
         $news->content = $request->content;
         $news->image = $request->image;
         $news->save();
         return redirect('/moi');

     }

     public function getEdit($id){
         $news = news::find($id);
         return view('news.edit')->with('news', $news);
     }

     public function edit(Request $request , $id){
         $news = news::find($id);
         $news->title = $request->title;
         $news->content = $request->content;
         $news->image = $request->image;
         $news->save();

         return redirect('/moi');

     }

     public function delete($id){
         $news = news::find($id);
         $news->delete();
         return redirect('/moi');
     }
}
