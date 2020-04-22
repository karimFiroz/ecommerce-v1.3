<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('pages.home');

    }

      public function home(){
    return \App\Post::all();
        //return view('pages.home');
    }




    public function products(){
        return view('pages.index');

    }


     public function product(){
        return view('pages.product.index');

    }


  public function data(){
        return view('pages.data');

    }



  public function contact(){
        return view('pages.contact');

    }



 public function formHandler(Request $request){

            $rules=[
                'name'=>'required|min:5',
                'email'=>'required|email'
                    ];
            $this->validate($request,$rules);
       return redirect()->back()->with('success','Successfully inserted!');
      // return redirect()->back()->with('danger','Something bad happend!');

}
  


}
