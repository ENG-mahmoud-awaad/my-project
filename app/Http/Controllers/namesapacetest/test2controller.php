<?php

namespace App\Http\Controllers\namesapacetest;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class test2controller extends BaseController
{
    
  public function printage(){
      return 'my age is 27';
  }
}
