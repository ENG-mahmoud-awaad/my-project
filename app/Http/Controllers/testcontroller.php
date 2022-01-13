<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class testcontroller extends BaseController
{
    public function aa(){
        return 'mahmoud test';
    }
    public function printage(){
        return 'my age is 27';
    }
}
