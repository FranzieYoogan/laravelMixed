<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function exhbit()
    {

        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];

        if (isset($_POST['submit'])) {

                @include('/testingLaravel/testing-app/resources/views/welcome.blade.php');

            echo " <h1> $input1 </h1>
                  <h1>  $input2 </h1>";


        }



    }



}




