<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
       
       
        $name = $req ->input('name');
        $collage = $req ->input('collage');
        $email = $req ->input('email');
        
        $data = array('name'=>$name, 'collage'=>$collage, 'email'=>$email);

        DB::table('students')->insert ($data);

        echo'you have successfully registered';

   

    }





}
