<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function admin(){

        $data=[];
        $data['id']=5;
        $data['name']='mahmoud';
        // $data['name']='muhammed';
        return view('test',$data);
    }
}
