<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\banner;
use App\Models\contactus;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function layouts(){
        $data = [
            'banners' =>banner::where('name','about us')->get(),
        ];
        return view('aboutus/layouts')->with($data);
    }

    public function contact(){
        $data = [
            'banners' =>banner::where('name','about us')->get(),
        ];
        return view('aboutus/contact')->with($data);
    }

    public function contact_send(Request $request){

        contactus::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),

            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
            'company'=>$request->input('company'),
        ]);


        return redirect()->back();
    }



    // blogs - article - news

    public function news_details($id){
        $data =[
            'banners' =>banner::where('name','news')->get(),
            'blog_home'=>Article::find($id),
            'new'=>Article::find($id)
        ];
        return view('aboutus/news_details')->with($data);
    }

    public function news(){

        $data = [
            'banners' =>banner::where('name','about us')->get(),
            'news'=>Article::orderBy('id','desc')->where('group_name','!=','rules') ->get(),

        ];
        return view('aboutus/news')->with($data);
    }

    public function safety_rules(){
        $data = [
            'banners' =>banner::where('name','safety rules')->get(),
            'rules' => Article::where('group_name','rules')->get()
        ];
        return view('aboutus/safety_rules')->with($data);
    }
}
