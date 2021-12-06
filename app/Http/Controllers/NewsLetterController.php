<?php

namespace App\Http\Controllers;

use App\Events\PodcastProcessed;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index(){
        return view('newsletter');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|email|unique:newsletter,email'
        ]);

        event(new PodcastProcessed($request->input('email')));
    }
}
