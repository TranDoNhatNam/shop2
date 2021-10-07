<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //
    public function getview(){
        $listSlide = Slide::all();
        return view('slide.list')->with('listSlide', $listSlide);
    }

    public function getCreate(){

        return view('slide.create');
    }

    public function save(Request $request){

        $slide = new Slide();
        $slide->link = $request->link;
        $slide->image = $request->image;
        $slide->save();

        return redirect('/slide');
    }

    public function getedit($id){

        $slide = Slide::find($id);

        return view('slide.edit')->with('slide', $slide);
    }

    public function update(Request $request , $id){

        $slide = Slide::find($id);
        $slide->link = $request->link;
        $slide->image = $request->image;
        $slide->save();
        return redirect('/slide');

    }

    public function delete($id){
        $slide = Slide::find($id);
        $slide->delete();
        return redirect('/slide');
    }

}
